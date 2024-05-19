<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Cart_detail;
use App\Models\Product;
use App\Models\CustomerUser;

class OrdersController extends Controller
{
    //method index
    public function index() {
        session_start(); 
        $order = Order::all();
        if(!empty($_SESSION['user_id'])) {
            $order = Order::where('customer_id', $_SESSION['user_id'])->get();
            // dd($order);
            return view('orders.orders', [
                'order' => $order,
            ]);
        } 
        return view('orders.orders', [
            'order' => $order,
        ]);
    }

    //method delete order(hủy đơn hàng)
    public function delete($id) {
        //find object
        $order = Order::find($id);
        
        //kiểm tra đơn hàng đã hoàn thành hay chưa
        $order['PaymentStatus'] !== 'Completed' ? $order->delete() : null;

        // Chuyển hướng người dùng về trang danh sách đơn hàng với thông báo thành công
        return redirect()->route('orders.index')->with('success', 'Bạn đã xóa đơn hàng thành công');

    }

    //method show detail order
    public function show($id) {
        //select bản orderDetail cùng với bản product
        $orders = OrderDetail::with('Orders', 'product')->where('order_id',$id)->get();
        $order = Order::find($id);
        $status = $order->PaymentStatus;
        // dd($status);
        return view('orders.order_detail', [
            'orders' => $orders,
            'status' => $status,
            'id' => $id,
        ]);
    }

    public function check_payment() {
        $cookieValue = null;
        if(isset($_COOKIE['carts'])) {
            store();
        }else if(isset($_COOKIE['payment'])) {
            store_payment();
        }
    }

    //method create order
    public function store(Request $request) {
        session_start();
        $user_id = $_SESSION['user_id'];
        //kiểm tra xem người dùng có nhập thông tin đầy đủ chưa
        $user = CustomerUser::where('id', $user_id)->first();
        if($user->name == null || $user->DOB == null || $user->address  == null || $user->sex  == null || $user->phone  == null) {
            return redirect("account/profile")
                ->with('verify_profile', true);
        }
        // Lấy giá trị của cookie "carts" từ $_COOKIE
        if(isset($_COOKIE['payment'])) {
            $this->store_payment();
            return redirect("thank");
        }else if (isset($_COOKIE['carts'])){
            $cookieValue = isset($_COOKIE['carts']) ? $_COOKIE['carts'] : '';
            // Sử dụng json_decode để chuyển đổi giá trị từ chuỗi JSON thành một mảng PHP
            $arrayCart = json_decode($cookieValue, true);
            //xử lý kho trong mảng chỉ có 1 phần tử
            $request->validate([
                'customer_id' => 'requited',
                'PaymentMethod' => 'requited',
                'PaymentStatus' => 'requited',
            ]);
            $data = $request->all();
            //add order to table
            $order = Order::create([
                'customer_id' => $user_id,
                'TotalAmount' => $data['TotalAmount'],
                'PaymentMethod' => 'Cash',
                'PaymentStatus' => 'Verify',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $cart = Cart::where('user_id', $user_id)->first();
            foreach($arrayCart as $product_id) {
                $product = Product::where('id', $product_id)->first();
                $cart_detail = Cart_detail::where('cart_id',$cart->id)
                ->first();
                $order_detail =  OrderDetail::create([
                    'order_id' => $order->id,
                    'product_id' => $cart_detail->product_id,
                    'quantity' => $cart_detail->quantity,
                    'seller_id' => $product->seller_id,
                    'price' => $product->price,
                    'total' => $cart_detail->quantity * $product->price,
                ]);
                $product -> sold = $product->sold + $cart_detail->quantity;
                $product -> quantity = $product->quantity - $cart_detail->quantity;
                $product->save();
                $cart_detail->delete();
            }
            //hủy cookie 
            setcookie("carts", "", time() -3600);
            unset($_COOKIE['carts']);
            return redirect("thank");
        }else {
            return redirect("home");
        }
    }

    public function store_payment() {
        // session_start();
        $user_id = $_SESSION['user_id'];
        //kiểm tra xem người dùng có nhập thông tin đầy đủ chưa
        $user = CustomerUser::where('id', $user_id)->first();
        if($user->name == null || $user->DOB == null || $user->address  == null || $user->sex  == null || $user->phone  == null) {
            return redirect("account/profile")
                ->with('verify_profile', true);
        }
        // Lấy giá trị của cookie "carts" từ $_COOKIE
        $cookieValue = isset($_COOKIE['payment']) ? $_COOKIE['payment'] : '';
        // Sử dụng json_decode để chuyển đổi giá trị từ chuỗi JSON thành một mảng PHP
        $arrayCart = json_decode($cookieValue, true);
        //add order to table
        $order = Order::create([
            'customer_id' => $user_id,
            'TotalAmount' => $arrayCart[2],
            'PaymentMethod' => 'Cash',
            'PaymentStatus' => 'Verify',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $cart = Cart::where('user_id', $user_id)->first();
        $product = Product::where('id', $arrayCart[1])->first();
        // $cart_detail = Cart_detail::where('cart_id',$cart->id)
        // ->first();
        $order_detail =  OrderDetail::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'quantity' => $arrayCart[0],
            'seller_id' => $product->seller_id,
            'price' => $product->price,
            'total' => $arrayCart[0] * $product->price,
        ]);
        $product -> sold = $product->sold + $arrayCart[0];
        $product -> quantity = $product->quantity - $arrayCart[0];
        $product->save();
        //hủy cookie 
        setcookie("payment", "", time() -3600);
        unset($_COOKIE['payment']);
    }

    //method update order
    public function updateStatus($id) {
        $order = Order::find($id);
        $order -> PaymentStatus = 'Failed';
        //save order to table
        $order -> save();
        //chuyển hướng nếu cần
        return redirect()->route('orders.index');
    }

    public function viewUserOrder(Request $request)
    {
        session_start();
        $customerUserId = $_SESSION['user_id'];
        $order_user = Order::where('customer_id', $customerUserId)
        ->orderBy('created_at', 'desc')
        ->get();
        return view('auth.account.order', [
            'order_user' => $order_user,
        ]);
    }
}
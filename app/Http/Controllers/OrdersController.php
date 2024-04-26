<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Category;

class OrdersController extends Controller
{
    //method index
    public function index() {
        $order = Order::all();
        // dd($order); 
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

    //method create order
    public function create(Request $request) {
        $request->validate([
            'customer_id' => 'requited',
            'PaymentMethod' => 'requited',
            'PaymentStatus' => 'requited',
        ]);

        $data = $request->all();

        //add order to table
        $order = Order::create([
            'Order_Describe' => $data['Order_Describe'],
            'customer_id' => $data['customer_id'],
            'TotalAmount' => $data['TotalAmount'],
            'PaymentMethod' => $data['PaymentMethod'],
            'PaymentStatus' => $data['PaymentStatus'],
        ]);

        //chuyển hướng nếu cần
        // return view()

    }

    //method update order
    public function updateStatus($id) {

        // $idCustomer = $request->get('id');
        $order = Order::find($id);
        $order -> PaymentStatus = 'Failed';
        
        //save order to table
        $order -> save();
       

        //chuyển hướng nếu cần
        return redirect()->route('orders.index');

    }
}
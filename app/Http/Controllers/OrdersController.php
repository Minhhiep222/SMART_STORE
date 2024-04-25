<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

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

    //method delete order
    public function delete($id) {
        //find object
        $order = Order::find($id);

        $order->delete();

        // Chuyển hướng người dùng về trang danh sách đơn hàng với thông báo thành công
        return redirect()->route('orders.index')->with('success', 'Bạn đã xóa đơn hàng thành công');

    }

    //method show detail order
    public function show($id) {
        $order = Order::find($id);
        return view('orders.order_detail', [
            'order' => $order,
        ]);
    }
}
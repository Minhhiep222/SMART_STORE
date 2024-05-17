<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SupportRequest;

class CustomerSupportController extends Controller
{
    // Phương thức hiển thị trang chăm sóc khách hàng
    public function index()
    {
        // Lấy danh sách các yêu cầu từ khách hàng
        $requests = SupportRequest::all();
        
        // Trả về view và truyền biến $requests vào view
        return view('customer_support', compact('requests'));
    }

    // Phương thức xử lý việc gửi yêu cầu từ khách hàng
    public function submitRequest(Request $request)
    {
        // Xử lý việc gửi yêu cầu và lưu vào cơ sở dữ liệu
        
        // Sau khi xử lý xong, chuyển hướng lại đến trang chăm sóc khách hàng
        return redirect()->route('customer.support');
    }

    // Phương thức xử lý việc gửi phản hồi từ nhân viên hỗ trợ
    public function sendResponse(Request $request)
    {
        // Xử lý việc gửi phản hồi và lưu vào cơ sở dữ liệu
        
        // Sau khi xử lý xong, chuyển hướng lại đến trang chăm sóc khách hàng
        return redirect()->route('customer.support');
    }
    public function supportCustomerUser(Request $request) {
        return view('support');
    }
    public function notificatiomCustomerUser(Request $request) {
        return view('notifications');
    }
}

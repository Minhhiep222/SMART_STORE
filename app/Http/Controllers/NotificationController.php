<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function show()
    {
        $notifications = [
            "Thông báo 1: Đã nhận được tin nhắn mới.",
            "Thông báo 2: Cập nhật hồ sơ thành công.",
            "Thông báo 3: Đã đăng nhập thành công."
        ];

        return view('notifications', ['notifications' => $notifications]);
    }
    public function support()
{
    return view('support');
}
}

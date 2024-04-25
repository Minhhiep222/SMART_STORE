<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Vite;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\OrderDetailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('header', function () {
    return view('header');
});

Route::get('home', function () {
    return view('auth.home');
});

Route::get('seller', function () {
    return view('auth.seller');
});

Route::get('product', function () {
    return view('auth.product');
});

Route::get('update', function () {
    return view('auth.update');
});

Route::get('cart', function () {
    return view('auth.cart');
});

Route::get('payment', function () {
    return view('auth.payment');
});

Route::get('header_cart', function () {
    return view('header_cart');
});

Route::get('product_detail', function () {
    return view('auth.product_detail');
});

Route::get('account/profile', function () {
    return view('auth.account.profile');
});

Route::get('account/password', function () {
    return view('auth.account.password');
});

Route::resource('orders', OrdersController::class);
Route::get('orders/{id}/delete', [OrdersController::class, 'delete'])->name('orders.delete');

Route::resource('order_detail', OrderDetailController::class);
 
Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('account/oder_detail', function () {
    return view('auth.account.oder_detail');
});



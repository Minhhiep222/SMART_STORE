<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Vite;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('header', function () {
    return view('header');
});

Route::resource('home', CategoryController::class);



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
Route::get('orders/{id}/updateStatus', [OrdersController::class, 'updateStatus'])->name('orders.updateStatus'); 

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('account/oder_detail', function () {
    return view('auth.account.oder_detail');
});

Route::get('dashboard', [UserController::class, 'dashboard']);

Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'authUser'])->name('user.authUser');

Route::get('create', [UserController::class, 'createUser'])->name('user.createUser');
Route::post('create', [UserController::class, 'postUser'])->name('user.postUser');

Route::get('read', [UserController::class, 'readUser'])->name('user.readUser');
Route::get('delete', [UserController::class, 'deleteUser'])->name('user.deleteUser');

Route::get('update', [UserController::class, 'updateUser'])->name('user.updateUser');
Route::post('update', [UserController::class, 'postUpdateUser'])->name('user.postUpdateUser');

Route::get('signOut', [UserController::class, 'signOut'])->name('signOut');
Route::get('list', [UserController::class, 'listUser'])->name('user.list');

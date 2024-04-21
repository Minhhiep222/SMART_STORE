<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Vite;

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

Route::get('header_cart', function () {
    return view('header_cart');
});
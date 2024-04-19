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

Route::get('product_detail', function () {
    return view('auth.product_detail');
});


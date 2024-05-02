<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Vite;
use App\Http\Controllers\CrudCustomerUsersController;
use App\Models\CustomerUser;

Route::get('/', function () {
    return view('welcome');
});

Route::get('header', function () {
    return view('header');
});

Route::get('home', function () {
    return view('auth.home');
});


Route::get('Login', [CrudCustomerUsersController::class, 'viewLogin'])->name('viewLogin');
Route::post('Login', [CrudCustomerUsersController::class, 'login'])->name('login');


Route::match(['get', 'post'], 'seller', [CrudCustomerUsersController::class, 'viewSeller'])->name('seller.viewSeller');
// Route::post('seller', [CrudCustomerUsersController::class, 'arrangeProduct'])->name('seller.arrangeProduct');

Route::post('deleteProduct', [CrudCustomerUsersController::class, 'deleteProduct'])->name('seller.deleteProduct');

Route::get('updateProduct', [CrudCustomerUsersController::class, 'viewUpdateProduct'])->name('seller.viewUpdateProduct');
Route::post('updateProduct', [CrudCustomerUsersController::class, 'updateProduct'])->name('seller.updateProduct');

Route::get('product', [CrudCustomerUsersController::class, 'viewAddProduct'])->name('seller.viewAddProduct');
Route::post('product', [CrudCustomerUsersController::class, 'addProduct'])->name('seller.addProduct');

Route::get('product_detail', [CrudCustomerUsersController::class, 'viewDetailProduct'])->name('seller.viewDetailProduct');


Route::match(['get', 'post'], 'product_detailIndexCustomerUser', [CrudCustomerUsersController::class, 'viewDetailProductIndexCusTomerUser'])->name('user.detailIndexCustomerUser');
Route::post('arrangeIndexUserCustomer', [CrudCustomerUsersController::class, 'arrangeIndexUserCustomer'])->name('user.arrangeIndexUserCustomer');

Route::post('comment', [CrudCustomerUsersController::class, 'formComment'])->name('user.formComment');
Route::get('account/profile', [CrudCustomerUsersController::class, 'viewUserProfile'])->name('user.viewUserProfile');
Route::post('account/profile', [CrudCustomerUsersController::class, 'updateUserProfile'])->name('user.UpdateUserProfile');
Route::post('returnHome', [CrudCustomerUsersController::class, 'returnHome'])->name('returnHome');
Route::get('signout', [CrudCustomerUsersController::class, 'signOut'])->name('signOut');

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






Route::get('account/password', function () {
    return view('auth.account.password');
});
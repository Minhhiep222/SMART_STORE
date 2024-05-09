<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Vite;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\FindController;
use App\Http\Controllers\ForgetController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CrudCustomerUsersController;
use App\Models\CustomerUser;

Route::get('/', function () {
    return view('welcome');
});

Route::get('header', function () {
    return view('header');
});

Route::resource('home', CategoryController::class);

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

Route::get('create_store', function () {
    return view('create_store');
});

Route::get('account/password', function () {
    return view('auth.account.password');
});

Route::resource('orders', OrdersController::class);
Route::get('orders/{id}/delete', [OrdersController::class, 'delete'])->name('orders.delete');

Route::resource('order_detail', OrderDetailController::class);
Route::get('orders/{id}/updateStatus', [OrdersController::class, 'updateStatus'])->name('orders.updateStatus'); 


Route::get('register', function () {
    return view('register');
});

Route::get('account/oder_detail', function () {
    return view('auth.account.oder_detail');
});


//route user
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

// Route seller
Route::post('create_seller', [SellerController::class, 'postSeller'])->name('user.postSeller');
Route::resource('store', SellerController::class);

Route::resource('find', FindController::class);

Route::resource('forget', ForgetController::class);
Route::post('set_password', [ForgetController::class, 'setPassword'])->name('user.setPassword');
Route::post('find_user', [ForgetController::class, 'findUser'])->name('user.findUser');

//test Mail
Route::get('test-mail', [HomeController::class, 'testEmail']);

//request

Route::get('ajax-search', [ProductController::class, 'ajaxSearch'])->name('ajax-search');

//
Route::get('find/{name}/productname', [FindController::class, 'findProductName'])->name('find.productname');
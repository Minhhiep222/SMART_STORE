<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Cart_detail;

class CartController extends Controller
{
    //
    public function index() {
        session_start();
        $cart = Cart::find(1)->first();
        $cart_detail = Cart_detail::with('product_cart')
        ->where('cart_id', $cart->id)->get();
        $total = 0;
        foreach($cart_detail as $cart_product) {
            $total += $cart_product->quantity * $cart_product->product_cart->price;
        }
        // dd($cart_detail);
        return view('carts.cart', [
            'cart_detail' => $cart_detail,
            'total' => $total,
        ]);
    }
}

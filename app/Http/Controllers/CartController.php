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
        $user_id = $_SESSION['user_id'];
        $cart = Cart::where('id', $user_id)->first();
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

    //
    public function addToCart() {
        session_start();
        $user_id = $_SESSION['user_id'];
        $data = request('data');
        $arrayIdWithQuantity = json_decode($data, true);
        $cart = Cart::where('id', $user_id)->first();
        if($cart == null) {
            $cart = Cart::create([
                'user_id' => $user_id,
            ]);
        }
        
        if($cart) {
            $cart_detail = Cart_detail::create([
                'cart_id' => $cart->id,
                'product_id' => $arrayIdWithQuantity[1],
                'quantity' => $arrayIdWithQuantity[0],
            ]);
        }

        $count_cart = Cart_detail::where('cart_id', $cart->id)->count();
        return $count_cart ;
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Cart_detail;
use App\Models\CustomerUser;

class PaymentController extends Controller
{
    //
    public function index() {
        $user_id = 1;
        $user = CustomerUser::find($user_id)->first();
        //bỏ session ở đây để chọn ra cart_detail
        $arrayCart = [1];
        $cart = Cart::where('user_id',$user_id)->first();
        $cart_details = Cart_detail::with('product_cart')
        ->where('cart_id', $cart->id)->get();
        $total = 0;
        $product_cart = [];
        if(count($arrayCart) > 1) {
            foreach($cart_details as $index => $item) {
                if($item->id == $arrayCart[$index]) {
                    $product_cart[$index] = $item;
                    $total += $item->quantity * $item->product_cart->price;
                }
            }
        }else {
            $item = $cart_details[0];
            if($item->id == $arrayCart[0]) {
                $product_cart[0] = $item;
                $total += $item->quantity * $item->product_cart->price;
            }
        }
        // dd($product_cart);
        return view('carts.payment', [
            'cart_detail' => $product_cart,
            'total' => $total,
        ]);
        // dd($product_cart);
    }
}
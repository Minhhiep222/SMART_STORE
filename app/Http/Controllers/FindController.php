<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\CustomerUser;
use App\Models\Seller;

class FindController extends Controller
{
    //
    public function index(Request $request) {
        session_start();
        $categories = Category::all();
        $products = Product::with('category', 'seller')->where('product_name', 'like', '%' . $request->key . '%')
        ->orWhere('description', 'like', '%' . $request->key . '%')
        ->orWhere('price', 'like', '%' . $request->key . '%')
        ->get();
        // $seller = Seller::find()
        // dd($products);
        if(!empty($_SESSION['user_id'])){
            $id = $_SESSION['user_id'];
            $user = CustomerUser::find($id);
            // dd($products[3]->seller->name_company);
            return view('auth.find', [
                'categories' => $categories,
                'user' => $user[0],
                'products' => $products,
            ]);
        }
        else{
            return view('auth.find', [
                'categories' => $categories,
                'products' => $products,
            ]);
        }  
    }

    public function show($id) {
        session_start();
        $products = Product::with('category', 'seller')->where('category_id', $id)->get();
        // dd($products);
        $categories = Category::all();  
        //
        // dd($user);
        if(!empty($_SESSION['user_id'])){
            $id = $_SESSION['user_id'];
            $user = CustomerUser::find($id);
            // dd($_SESSION['user_id']);
            return view('auth.find', [
                'categories' => $categories,
                'user' => $user,
                'products' => $products,
            ]);
        }
        else{
            return view('auth.find', [
                'categories' => $categories,
                'products' => $products,
            ]);
        }  
    }

    public function findProductName($name) {
        // dd($name);
        session_start();
        $categories = Category::all();
        $products = Product::find($name)
        ->first();
        // $seller = Seller::find()
        dd($products);
        if(!empty($_SESSION['user_id'])){
            $id = $_SESSION['user_id'];
            $user = CustomerUser::find($id)->first();
            // dd($products[3]->seller->name_company);
            return view('auth.find', [
                'categories' => $categories,
                'user' => $user,
                'products' => $products,
            ]);
        }
        else{
            return view('auth.find', [
                'categories' => $categories,
                'products' => $products,
            ]);
        }  
    }

    
}

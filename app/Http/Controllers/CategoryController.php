<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\CustomerUser;

class CategoryController extends Controller
{
    //method index
    public function index() {
        session_start();
        $categories = Category::all();
        $products = Product::with('seller')->get();
        if(!empty($_SESSION['user_id'])){
            $id = $_SESSION['user_id'];
            $user = CustomerUser::find($id)->first();
            // dd($_SESSION['user_id']);
            // if(isset($_SESSION["user_id"])){
                // unset($_SESSION['user_id']);
                // unset($_SESSION['user_img']);
                // unset($_SESSION['user_name']);
                // unset($_SESSION['user_email']);
            // }
            return view('auth.home', [
                'categories' => $categories,
                'user' => $user,
                'products' => $products,
            ]);
        }
        else{
            return view('auth.home', [
                'categories' => $categories,
                'products' => $products,
            ]);
        }  
        
        // dd()
    }

    public function show($id) {
        $products = Product::with('category', 'seller')->where('category_id', $id)->get();
        // dd($products);
        $categories = Category::all();  
        //
        return view('auth.home', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}

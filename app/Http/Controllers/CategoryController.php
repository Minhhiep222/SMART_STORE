<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class CategoryController extends Controller
{
    //method index
    public function index() {
        session_start();
        $categories = Category::all();
        $products = Product::with('seller')->get();
        if(!empty($_SESSION['user_id'])){
            $id = $_SESSION['user_id'];
            $user = User::find($id);
            // dd($_SESSION['user_id']);
            return view('auth.home', [
                'categories' => $categories,
                'user' => $user[0],
                'products' => $products,
            ]);
        }
        else{
            return view('auth.home', [
                'categories' => $categories,
                'products' => $products,
            ]);
        }  
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

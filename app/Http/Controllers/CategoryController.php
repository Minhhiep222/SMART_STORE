<?php

namespace App\Http\Controllers;
session_start();
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class CategoryController extends Controller
{
    //method index
    public function index() {
        $categories = Category::all();
        if(!empty($_SESSION['user_id'])){
            $id = $_SESSION['user_id'];
            $user = User::find($id);
            // dd($_SESSION['user_id']);
            return view('auth.home', [
                'categories' => $categories,
                'user' => $user[0],
            ]);
        }
        else{
            return view('auth.home', [
                'categories' => $categories,
            ]);
        }  
    }

    public function show() {
        $categories = Category::all();
        // dd($categories);
        //
        return view('auth.home', [
            'categories' => $categories,
        ]);
    }
}

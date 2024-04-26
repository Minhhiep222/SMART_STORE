<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    //method index
    public function index() {
        $categories = Category::all();
        // dd($categories);
        //
        return view('auth.home', [
            'categories' => $categories,
        ]);
    }
}

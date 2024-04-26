<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\CustomerUser;
use App\Models\Product;
use App\Models\Category;

class CrudCustomerUsersController extends Controller
{
    public function viewUserProfile(Request $request)
    {
        $customerUserId = $request->get('id');
        $customerUser = CustomerUser::find($customerUserId);
        $dob = $customerUser->DOB;
        $parts = explode('-', $dob);
        $year = $parts[0];
        $month = $parts[1];
        $day = $parts[2];
        return view('auth.account.profile', [
            'customerUser' => $customerUser,
            'year' => $year,
            'month' => $month,
            'day' => $day
        ]);
    }
    
    public function updateUserProfile(Request $request)  {   
        $input = $request->all();
        $dob = $request->get('year') . "-" . $request->get('month') . "-" . $request->get('day');
        $customerUserId = $request->get('id');
        $customerUser = CustomerUser::find($customerUserId);
        $customerUser->name = $input['name'];
        $customerUser->username = $input['username'];
        $customerUser->email = $input['email'];
        $customerUser->phone = $input['phone'];
        $customerUser->address = $input['address'];
        $customerUser->sex =  $input['sex'];
        $customerUser->DOB =  $dob;

        if ($request->hasFile('img')) {
            // Xóa hình ảnh cũ (nếu có)
            Storage::delete('img/img_auth/' . $customerUser->img);
    
            // Lưu hình ảnh mới vào thư mục lưu trữ
            $image = $request->file('img');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('img/img_auth'), $imageName);
    
            // Cập nhật tên hình ảnh mới cho sản phẩm
            $customerUser->img = $imageName;
            
        }
        $customerUser->save();
       return redirect("home");
        
    }
   
   
    public function viewSeller(Request $request)
    {   
      
        $idSeller = $request->get('id_seller');
      

        if ($request->has('oldest')) {
            $products = Product::with('Category')->where('seller_id', $idSeller)->orderBy('id')->get();
            $sellerTotal = Product::with('Category')->where('seller_id',$idSeller)->count();  
            return view('auth.seller', ['products' => $products,'idSeller' => $idSeller, 'sellerTotal' => $sellerTotal]);
        } else if ($request->has('newest')) {
            $products = Product::with('Category')->where('seller_id', $idSeller)->orderByDesc('id')->get();
            $sellerTotal = Product::with('Category')->where('seller_id',$idSeller)->count();  
            return view('auth.seller', ['products' => $products,'idSeller' => $idSeller, 'sellerTotal' => $sellerTotal]);
        }
    
    
        else if($request->has('bestselling')) {
            $products = Product::with('Category')->where('seller_id', $idSeller)->orderBy('sold')->get();  
            $sellerTotal = Product::with('Category')->where('seller_id',$idSeller)->count();  
            return view('auth.seller', ['products' => $products,'idSeller' => $idSeller, 'sellerTotal' => $sellerTotal]);
        }
        else if($request->has('priceDESC')) {
            $products = Product::with('Category')->where('seller_id', $idSeller)->orderBy('price')->get();
            $sellerTotal = Product::with('Category')->where('seller_id',$idSeller)->count();  
            return view('auth.seller', ['products' => $products,'idSeller' => $idSeller, 'sellerTotal' => $sellerTotal]);
        }
        else if($request->has('priceASC')) {
            $products = Product::with('Category')->where('seller_id', $idSeller)->orderByDESC('price')->get();
            $sellerTotal = Product::with('Category')->where('seller_id',$idSeller)->count();  
            return view('auth.seller', ['products' => $products,'idSeller' => $idSeller, 'sellerTotal' => $sellerTotal]);
        }
        else {
            $products = Product::with('Category')->where('seller_id',$idSeller)->get(); 
            $sellerTotal = Product::with('Category')->where('seller_id',$idSeller)->count();  
            return view('auth.seller', ['products' => $products,'idSeller' => $idSeller, 'sellerTotal' => $sellerTotal]);
            // return redirect('seller');
        }
    }
    public function viewAddProduct(Request $request)
    {   
       
            $categories = Category::all();
            return view('auth.product',['categories' => $categories, 'seller_id' => $request->get('id')]);
        
        return view('auth.product');
      
    }

    public function addProduct(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'des' => 'required',
            'category_id' => 'required',
            'seller_id' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();
  
        if ($request->hasFile('img')) {
            // Lưu hình ảnh vào thư mục lưu trữ

            //luu hinh anh vao $image
            $image = $request->file('img');

            //dat ten cho hinh anh neu chon 2 hinh giong nhau
            $imageName = time().'.'.$image->getClientOriginalExtension();

            //luu hinh anh vao 
            $image->move(public_path('img/img_auth'), $imageName);
    
            // Thêm tên hình ảnh vào dữ liệu để lưu vào cơ sở dữ liệu
            $data['img'] = $imageName;
        }
    
   

        $check = Product::create([
            'product_name' => $data['name'],
            'description' => $data['des'],
            'price' => $data['price'],
            'quantity' => $data['quantity'],
            'img' => $data['img'],
            'category_id' => $data['category_id'],
            'seller_id' => $data['seller_id']
            
        ]);
        $products = Product::with('Category')->where('seller_id', $request->get('seller_id'))->orderByDESC('id')->get();
        
        $sellerTotal = Product::with('Category')->where('seller_id',$request->get('seller_id'))->count();  
        return view('auth.seller', ['products' => $products,'idSeller' =>  $request->get('seller_id'), 'sellerTotal' => $sellerTotal]);

      
 
    }
    public function viewDetailProduct(Request $request)
    {   
            $productId = $request->get('id');
            $product = Product::with('Category')->find($productId);  
            return view('auth.product_detail',['product' => $product]);
    }
    public function deleteProduct(Request $request)
    {   
        
           
            $productId = $request->get('productId');
            $idSeller = $request->get('id_seller');
            $product = Product::destroy($productId);
          
            $products = Product::with('Category')->where('seller_id',$idSeller)->get(); 
         
            $sellerTotal = Product::with('Category')->where('seller_id',$idSeller)->count();  
            return view('auth.seller', ['products' => $products,'idSeller' => $idSeller, 'sellerTotal' => $sellerTotal]);
         
    }
    public function viewUpdateProduct(Request $request)
    {   
       
        $productId = $request->get('id');
        $product = Product::find($productId);
        $categories = Category::all();
        return view('auth.update',['product' => $product,'categories' => $categories]);
    }
    public function updateProduct(Request $request)
    {   
        $input = $request->all();
        $idSeller = $request->get('id');
        $product = Product::find($input['id']);
        $product -> product_name = $input['name'];
        $product -> price = $input['price'];
        $product -> description = $input['des'];
        $product -> quantity = $input['quantity'];
        $product -> category_id = $input['category_id'];
      
        if ($request->hasFile('img')) {
            // Xóa hình ảnh cũ (nếu có)
            Storage::delete('img/img_auth/' . $product->img);
    
            // Lưu hình ảnh mới vào thư mục lưu trữ
            $image = $request->file('img');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('img/img_auth'), $imageName);
    
            // Cập nhật tên hình ảnh mới cho sản phẩm
            $product->img = $imageName;
            
        }
        $product -> save();
        $products = Product::with('Category')->where('seller_id', $request->get('seller_id'))->orderBy('id')->get();
        $sellerTotal = Product::with('Category')->where('seller_id',$request->get('seller_id'))->count();
        return view('auth.seller', ['products' => $products, 'idSeller' => $request->get('seller_id'), 'sellerTotal' => $sellerTotal]);
    }      
}
    

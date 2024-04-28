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

// ly do luc dau ham delete sai vi khong the truyen qua seller id , ham update co id cua seller product da co seller id 
// san roi , ham read duoc truyen truc tiep seller id qua dia chi , con delete chi truyen duoc id cua product thoi 
// -> lam bang form hay dia chi nhu nhau , khac cho delete xoa bang form -> co the truyen it san pham va idseller
// -> return view su dung dia chi cua phuong thuc hien co , co the la post hoac get -> no khong quan trong
// man hinh hien thi view cua 1 blade.php ma minh chon va minh se gan thuoc tinh cho no , khi nhan vo 1 chuc nang 
// vi du nhu sap xep no se truyen qua controller ma con troller do tra ve 1 view khac... ma controller do 
// co 1 route khac nua nen thanh dia chi se thay doi theo luon 
// -> return direct tra ve 1 route trong web, route do co controller thuc hien 1 view gi do...
// va no se tra ra man hinh nhu vay , tuy nhien vi du bai cua thay tra ve list vi controller list 
// da truyen day du thuoc tinh nen man hinh se hien thi ket qua minh mong muon 
// con do an truyen qua form , phai nhan form moi co id ma khi tra ve redirect thi lai khong nhan vao 
// form nen khong co id nen tra ve ket qua khong mong muon



class CrudCustomerUsersController extends Controller
{
    public function viewLogin(Request $request)
    {
        return view('auth.login');
    }
    public function login(Request $request) {
       
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $role = $request->get('role');

        //neu co loi thi ham bat loi ben kia se hien len
        // lưu vào đây để xác thực hàm auth
        
        $credentials = $request->only('email', 'password');
        if($role == 'seller') {
            if (Auth::guard('tbl_sellers')->attempt($credentials)) { 
                return view('auth.register');
            }
        }
        else if($role == 'customer') {
            if (Auth::guard('tbl_customer_users')->attempt($credentials)) { 
                return view('auth.resetPassword');
            }
        }
        
        return view('auth.login');
       
    }
    
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
    


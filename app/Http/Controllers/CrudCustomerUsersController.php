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
use App\Models\Seller;
use App\Models\Comment;
session_start();
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
    public function viewUserProfile(Request $request)
    {
        $customerUserId = $_SESSION['user_id'];
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
        $customerUser = CustomerUser::find($_SESSION['user_id']);
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
      
        $idSeller = $_SESSION['user_id'];
      

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

    public function viewDetailProductIndexCusTomerUser(Request $request)
    {   
        $productId = $request->get('productId');
        $customerUserId = $request->get('customerUserId');
        $product = Product::with('Category')->find($productId);  
        $seller = Seller::find($product->seller_id);
        $userComments = Comment::with('CustomerUser')->where('productId',$productId)->orderBy('created_at', 'desc')->get();

        $customerUser = CustomerUser::find($customerUserId);
        $totalComments = Comment::where('productId',$productId)->count();
        $oneStar = Comment::where('productId',$productId)->where('star',1)->count();
        $twoStar = Comment::where('productId',$productId)->where('star',2)->count();
        $threeStar = Comment::where('productId',$productId)->where('star',3)->count();
        $fourStar = Comment::where('productId',$productId)->where('star',4)->count();
        $fiveStar = Comment::where('productId',$productId)->where('star',5)->count();

        $percenOneStar = ($totalComments > 0) ? ceil(($oneStar / $totalComments) * 100) : 0;
        $percenTwoStar = ($totalComments > 0) ? ceil(($twoStar / $totalComments) * 100) : 0;
        $percenThreeStar = ($totalComments > 0) ? ceil(($threeStar / $totalComments) * 100) : 0;
        $percenFourStar = ($totalComments > 0) ? ceil(($fourStar / $totalComments) * 100) : 0;
        $percenFiveStar = ($totalComments > 0) ? ceil(($fiveStar / $totalComments) * 100) : 0;
        return view('auth.product_detail_customerUser', ['product' => $product, 'seller' => $seller, 'customerUser' => $customerUser, 'userComments' => $userComments, 'totalComments' => $totalComments,'percenOneStar' => $percenOneStar,'percenTwoStar' => $percenTwoStar,'percenThreeStar' => $percenThreeStar,'percenFourStar' => $percenFourStar, 'percenFiveStar' => $percenFiveStar]);
    }

    public function formComment(Request $request)
    {   
        $request->validate([
            'description' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'productId' => 'required',
            'customerUserId' => 'required',
            'star' => 'required',
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
        $check = Comment::create([
            'description' => $data['description'],
            'img' => $data['img'],
            'productId' => $data['productId'],
            'customerUserId' => $data['customerUserId'],
            'star' => $data['star'],
        ]);

            $productId = $request->get('productId');
            $customerUserId = $request->get('customerUserId');  
            $product = Product::with('Category')->find($productId);  
            $seller = Seller::find($product->seller_id);
            $userComments = Comment::with('CustomerUser')->where('productId',$productId)->orderBy('created_at', 'desc')->get();
            $customerUser = CustomerUser::find($customerUserId);
            $totalComments = Comment::where('productId',$productId)->count();
            $oneStar = Comment::where('productId',$productId)->where('star',1)->count();
            $twoStar = Comment::where('productId',$productId)->where('star',2)->count();
            $threeStar = Comment::where('productId',$productId)->where('star',3)->count();
            $fourStar = Comment::where('productId',$productId)->where('star',4)->count();
            $fiveStar = Comment::where('productId',$productId)->where('star',5)->count();

            $percenOneStar = ($totalComments > 0) ? ceil(($oneStar / $totalComments) * 100) : 0;
            $percenTwoStar = ($totalComments > 0) ? ceil(($twoStar / $totalComments) * 100) : 0;
            $percenThreeStar = ($totalComments > 0) ? ceil(($threeStar / $totalComments) * 100) : 0;
            $percenFourStar = ($totalComments > 0) ? ceil(($fourStar / $totalComments) * 100) : 0;
            $percenFiveStar = ($totalComments > 0) ? ceil(($fiveStar / $totalComments) * 100) : 0;
            return view('auth.product_detail_customerUser', ['product' => $product, 'seller' => $seller, 'customerUser' => $customerUser, 'userComments' => $userComments, 'totalComments' => $totalComments,'percenOneStar' => $percenOneStar,'percenTwoStar' => $percenTwoStar,'percenThreeStar' => $percenThreeStar,'percenFourStar' => $percenFourStar, 'percenFiveStar' => $percenFiveStar]);
    }
    public function arrangeIndexUserCustomer(Request $request)
    {   
        $customerUserId = $request->get('customerUserId');
        $customerUser = CustomerUser::find($customerUserId);
         if($request->has('newest')) {
            $products = Product::with('Category')->orderByDESC('id')->get();
            return view('auth.home', ['idCustomer' => $customerUser , 'products' => $products]);
         }
        else if($request->has('oldest')) {
            $products = Product::with('Category')->orderBy('id')->get();
            return view('auth.home', ['idCustomer' => $customerUser , 'products' => $products]);
         }
        else if($request->has('bestselling')) {
            $products = Product::with('Category')->orderBy('sold')->get();
            return view('auth.home', ['idCustomer' => $customerUser , 'products' => $products]);
         }
         else if($request->has('priceASC')) {
            $products = Product::with('Category')->orderByDESC('price')->get();
            return view('auth.home', ['idCustomer' => $customerUser , 'products' => $products]);
         }
         else if($request->has('priceDESC')) {
            $products = Product::with('Category')->orderBy('price')->get();
            return view('auth.home', ['idCustomer' => $customerUser , 'products' => $products]);
         }
    }
    public function returnHome(Request $request)
    {   
        if(session()->has('emailCustomerUser')) {
         $email = session('emailCustomerUser');
        $customerUser = CustomerUser::where('email', $email)->first();  
        $products = Product::with('Category')->orderByDESC('id')->get();
        return view('auth.home', ['idCustomer' => $customerUser , 'products' => $products]);  
        }
        else {
            $email = session('emailSeller');
            $seller = Seller::where('email',$email)->first();
            $idSeller = $seller->id;
            $products = Product::with('Category')->where('seller_id', $idSeller)->orderByDESC('price')->get();
            $sellerTotal = Product::with('Category')->where('seller_id',$idSeller)->count();  
            return view('auth.seller', ['products' => $products,'idSeller' => $idSeller, 'sellerTotal' => $sellerTotal]);
            
        }
    }     
    public function deleteProduct(Request $request)
    {      
            $productId = $request->get('productId');
            $idSeller = $request->get('id_seller');
            $product = Product::destroy($productId);
          
            $products = Product::with('Category')->where('seller_id',$idSeller)->get(); 
         
            $sellerTotal = Product::with('Seller')->where('seller_id',$idSeller)->count();  
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
    


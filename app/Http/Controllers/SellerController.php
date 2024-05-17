<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Models\Seller;

class SellerController extends Controller
{
    public function index() {
        // dd($_SESSION['user_id']);
        session_start();
        if(!empty($_SESSION['user_id'])){
            $id = $_SESSION['user_id'];
            $seller = Seller::find($id); 
            
            if($seller != null){
                return view('auth.seller');
            }
            else {
                return view('create_store');
            }
        }
        else{
            return view('create_store');
        }  
    }

    public function postSeller(Request $request)
    {
        session_start();
        $data = $request->all();
        // dd($data['name']);
        if($data['name'] == "" ||  $data['phone'] == "" || $data['address'] == "" ) {
            return redirect("home")
            ->with('create_store', true)
            ->with('create_fail', true);
        }

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'name_company' => 'required',
            'type_business' => 'required',
        ]);

        // $day = $_POST['day'];
        // $month = $_POST['month'];
        // $year = $_POST['year'];
        // $DOB = null;
        // if ($day && $month && $year) {
        //     // Tạo ngày sinh
        //     $DOB = $year . '-' . $month . '-' . $day;
        // } 
        
        if($request->get('sex') == "") {
            $data['sex'] = null;
        }
        $check = Seller::create([
            'id' => $_SESSION['user_id'],
            'user_id' => $_SESSION['user_id'],
            'name' => $data['name'],
            'phone' => $data['phone'],
            'sex' => $data['sex'],
            'address' => $data['address'],
            'name_company' => $data['name_company'],
            'type_business' => $data['type_business'],
        ]);
    
         return redirect("home")
        ->with('success', true)
        ->with('create_success', true);
    }
}
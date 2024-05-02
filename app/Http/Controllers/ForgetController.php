<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Mail;
use App\Mail\SetPassword;

class ForgetController extends Controller
{
    //
    public function index() {
        return view('auth.account.forget');
    }

    public function setPassword(Request $request) {
        $email = $request->only('email');
        // dd($email);
        $user = User::where('email',$email)->get();
        $password_new = "456789";
        $user[0] -> password = $password_new;
        $user[0]->save();
        if($user != null) {
            // Mail::to($email)->send(new SetPassword($password_new));
            return view('emails.SetPasswordSuccess');
        }
    }
}

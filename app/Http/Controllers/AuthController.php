<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
       return view('Auth.login');
    }
    public function login(Request $request){
       $request->validate([
           'password'=>'required|min:8',
           'email'=>'required'
       ]);
       $cre = $request->only('email','password');
      if(Auth::attempt($cre)){
        return 'Success';
      }

    }
     public function forgetPassword(){
         return view('Auth.forget-password');
     }

     public function forgetPasswordPost(Request $request){
        $request->validate([
            'email'=>'required'
        ]);
        return $request->email;
     }
}

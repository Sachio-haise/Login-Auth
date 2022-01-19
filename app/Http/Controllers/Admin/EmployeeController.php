<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function create(Request $request)
    {
        # code...
        $data['title'] = 'Employee Management';
        return view('employee.register', compact('data'));

    }

    public function showLogin()
    {
       return view('employee.login');
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
         return view('employee.forget-password');
     }

     public function forgetPasswordPost(Request $request){
        $request->validate([
            'email'=>'required'
        ]);
        return $request->email;
     }
}

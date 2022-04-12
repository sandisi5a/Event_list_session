<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view ('auths.login');
    }
    public function postlogin(Request $request)
    {
        if(auth::attempt($request->only('email','password'))){
            return redirect('/event');
        }
        return redirect('/login')->with('gagal','Gagal Login');  
    }
    public function logout()
    {
        Auth::logout(); 
        return redirect('/login');
    }
}

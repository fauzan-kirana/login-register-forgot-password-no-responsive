<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appController extends Controller
{
     public function login() {
        return view('login.login');
    }
    
    public function register() {
        return view('register.register');
    }
    
    public function forgotpassword() {
        return view('forgotpassword.forgot');
    }
}
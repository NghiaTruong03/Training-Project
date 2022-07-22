<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(){
        return view('admin.register');
    }
    public function store(Request $request){
    
    }   
    public function login(){
        return view('admin.login');
    }
}

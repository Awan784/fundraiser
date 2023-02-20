<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function login(){

        return view('admin.login-page');
    }
    public function index(){
        return view ('admin.index');
    }
    public function active_fundraiser(){
        
        return view('admin.active-fundraiser');
    }
}

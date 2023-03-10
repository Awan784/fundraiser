<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminDashboardController extends Controller
{
    public function login(){

        return view('admin.login-page');
    }
    public function index(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
           ]);
           $admin = Admin::where('email',$request->email)->first();
           if ($admin && Hash::check($request->password, $admin->password)   ) {
               Auth::login($admin);

           return view('admin.index',compact('admin'))->with('success', ' Welcome To this Beautiful Dashboard.');
         }

         return back()->with('error', 'Invaliad Email or Password');     
    }
    public function active_fundraiser(){
        
        return view('admin.active-fundraiser');
    }
    public function close_fundraiser(){
        
        return view('admin.closed-fundraiser');
    }
    public function featuretopics(){
        
        return view('admin.feature-topics-list');
    }
}

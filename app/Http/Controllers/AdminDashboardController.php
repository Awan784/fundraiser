<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\FundRaising;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as Session;
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
         if (Auth::guard('admins')->attempt($request->only(['email','password']))){
            Auth::guard('admins')->login($admin);
            session()->put('username', $admin->username);
            // dd(session());
            return redirect()->route('admin-dashboard')->with('success', ' Welcome To this Beautiful Dashboard.');;
        }

         return back()->with('error', 'Invaliad Email or Password');     
    }
    public function active_fundraiser(){
        
        $fundraisers=FundRaising::all();
        // dd($funraisers);
        return view('admin.active-fundraiser',compact('fundraisers'));
    }
    public function close_fundraiser(){
        
        return view('admin.closed-fundraiser');
    }
    public function featuretopics(){
        
        return view('admin.feature-topics-list');
    }
    public function commissions(){
        
        return view('admin.commissions');
    }
    public function logout()
        {
            Auth::guard('admins')->logout();
            Session::flush();
            // dd(auth());
            return redirect()->route('adminIndex');
        }
}

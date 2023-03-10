<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Auth;
use App\Models\FundRaising;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Hash;

class UserController extends Controller
{

    public function login(Request $request)
     {
         $validator = Validator::make($request->all(), [
             'email' => 'required|email|unique:users,email',
             'password' => 'required',
            ]);
            $user = User::where('email',$request->email)->first();
            if ($user && Hash::check($request->password, $user->password)   ) {
                Auth::login($user);

            return redirect()->route('user-dashboard')->with('success', ' Welcome To this Beautiful Dashboard.');
          }

          return back()->with('error', 'Invaliad Email or Password');     
        }

        public function active_fudraiser()
        {
            $id = Auth::id();
            $Active_fundrasier = DB::table('fund_raisings')
            ->whereNotNull('id')->where('user_id',$id)
            ->get();
            return view('user.active-user-fundraiser' ,compact('Active_fundrasier'));
        }
        public function logout()
        {
            Auth::logout();
            Session::flush();
            return redirect()->route('frontend-index');
        }
        public function activefund_delete($id)
        {  
            try {
                $item = FundRaising::findOrFail($id); 
                $item->delete(); 
                return redirect()->back()->with('success', 'Active fundraiser deleted successfully.'); 
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Failed to delete item.');
            }
        }
        
}

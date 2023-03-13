<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Auth;
use App\Rules\MatchOldPassword;
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
            $userName = auth()->user()->full_name;
            $Active_fundrasier = DB::table('fund_raisings')
            ->whereNotNull('id')->where('user_id',$id)
            ->get();
            return view('user.Active-Fundraiser.activeFundraiser' ,compact('Active_fundrasier','userName'));
        }
        public function edit_active_fudraiser($id)
        {
             $editActive =  FundRaising::where('id',$id)->first();
             $images = explode('|' , $editActive->raiser_images);

            return view('user.Active-Fundraiser.editActiveFundraiser' ,compact('editActive','images'));
        }
        public function update_active_fudraiser(Request $request, $id)
        {
            $record = FundRaising::findOrFail($id);
            $record->fill($request->all());
            $record->save();

            return redirect()->route('form.show', $id);
        }
        public function show_active_fudraiser( $id)
        {
            $showActive =  FundRaising::where('id',$id)->first();
            $images = explode('|' , $showActive->raiser_images);
       

            return view('user.Active-Fundraiser.showActiveFundraiser' ,compact('showActive','images'));
        }

        public function closed_fundraiser()
        {

            return view('user.closed-user-fundraiser');
        }

        public function user_profile()
        {

            return view('user.profile');
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
        public function changePassword(Request $request)
            {
                $data = Validator::make($request->all(),[
                    
                    'new_password' => ['nullable', 'string', 'min:8'],
                    'confirm_new_password' => ['nullable', 'required_with:new_password', 'same:new_password'],
                    'current_password' => ['required', function ($attribute, $value, $fail) {
                        if (!\Hash::check($value, Auth::user()->password)) {
                            return $fail(__('The current password is incorrect.'));
                        }
                    }]
                ]);
                if ($data->fails()) {
                    return redirect()->back()->withErrors($data)->withInput();
                }
                User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

                return redirect()->back()->with('success', 'Password changed successfully.');
            }
        
}

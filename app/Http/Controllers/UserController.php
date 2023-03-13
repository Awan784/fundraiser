<?php
namespace App\Http\Controllers;
use File;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\ContactUs;
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
            $validator = Validator::make($request->all(), [
                'banner_image' => 'required',
                'raiser_images' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            
            $images = array();
            if($files = $request->file('raiser_images')){
                foreach($files as $file){
                    $image_name = strtolower(trim($file->getClientOriginalExtension()));
                    $fileName = time() . rand(100, 999) . '.' . $image_name;
                    $uploaded_path = 'public/multipleImages/';
                    $image_url = $uploaded_path . $fileName;
                    $file->move($uploaded_path , $fileName );
                    $image[] = $image_url; 
                }
            } 
            
            if($request->hasFile('banner_image')){
                
                $imageName = strtolower(trim($request->banner_image->getClientOriginalExtension()));
                $fileName = time() . rand(100, 999) . '.' . $imageName;
                $request->banner_image->move(public_path() .'/bannerImages/', $fileName);
            }
            
            // dd($request->all());

            $editActive = FundRaising::findOrFail($id);
            $editActive->country = $request->country;
            $editActive->fund_name = $request->fund_name;
            $editActive->goal_amount = $request->goal_amount;
            $editActive->raiser_images = implode('|' ,$image);
            $editActive->banner_image = 'bannerImages/'. $fileName;
            $editActive->s_description = $request->s_description;
            $editActive->l_description = $request->l_description;
            $editActive->save();

            return redirect()->route('User-editActiveFundrasier', $id)->with('success', ' Active Fundraiser Updated Successfully.');
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
            public function user_communication()
            {
               
                return view('user.messages');
            }
            public function user_contact_us()
            {
              
                return view('user.user-contact-us');
            }
            public function contact_us(Request $request)
            {
                $validator = Validator::make($request->all(), [
                    'title' => 'required',
                    'description' => 'required',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }
                
                $user_id = Auth::id();
                $post = new ContactUs;
                $post->user_id = $user_id;
                $post->title = $request->title;
                $post->description = $request->description;
                $post->save();
                return redirect()->back()->with('success', 'Blog Post Form Data Has Been inserted');
            }
            public function user_withdrawals()
            {
                
                return view('user.withdrawals');
            }
            public function user_NewWithdrawals()
            {
                
                return view('user.new-withdrawals');
            }
        
}

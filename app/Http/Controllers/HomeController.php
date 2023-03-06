<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FundRaising;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;
use Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Mail;
use Session;
use File;
class HomeController extends Controller
{

    public function contact(){
        return view ('frontend.contact-us');
    }
   
    public function how_works(){
        return view ('frontend.how-works');
    }

    public function fundraising(){
        return view ('frontend.fundraising');
    } 



    public function fundraiser( ){

        return view('frontend.gofund');
    }


    public function signin(Request $request){

        // dd($request->all());
 try{
    $validator = Validator::make($request->all(), [
            'country' => 'required',
            'name' => 'required',
            'location' => 'required',
            'why_fundraising' => 'required',
        ]);
        $FundRaising = new FundRaising;
        $FundRaising->name = $request->name;
        $FundRaising->country = $request->country;
        $FundRaising->location = $request->location;
        $FundRaising->why_fundraising = $request->why_fundraising;
        $FundRaising->save();
        session()->put('first_form_id', $FundRaising->id);
        return view('frontend.gofund-step-2')->with('success', 'User created successfully.');
             } catch (\Exception $e) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        }
        
    
    public function gofundstep_three(Request $request ){
                  
        $validator = Validator::make($request->all(), [
            'name_of_fund' => 'required',
            'amount_goal' => 'required',
            'fund_for' => 'required',
            'payment_method' => 'required',
        ]);


        $Formid = session('first_form_id');
        $random = sprintf("%06d", mt_rand(1, 999999));
        $refernce_id = 'MTFX' .$random;

        $form = FundRaising::find($Formid);
        
        $form->fund_name = $request->name_of_fund;
        $form->reference_id = $refernce_id;
        $form->goal_amount = $request->amount_goal;
        $form->collecting_fund_for = $request->fund_for;
        $form->fund_receive = $request->payment_method;
        // dd($request->all());
          if ($request->payment_method == 'bank_transfer') {
            $request->validate([
                'bank_id' => 'required',
            ]);
            $form->bank_id = $request->bank_id;
        }
        else if ($request->payment_method == 'phone_payment') {
            $request->validate([
                'phone_no' => 'required',
            ]);
            $form->phone_no = $request->phone_no;
        }
          $form->save();

        return view('frontend.gofund-step-3');
    }

    public function gofundstep_four(Request $request){
    
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
    

            $Formid = session('first_form_id');
            $form = FundRaising::find($Formid);
            
                   $form->fund_type = $request->fund_type;
                   if ($request->fund_type == 'Public' || 'Anonymous') {
                   $form->code = $request->code;
                         
                }
                else if ($request->fund_type == 'Private') {
                  
                    $form->code = $request->code;
                }
                   $form->s_description = $request->s_description;
                   $form->l_description = $request->l_description;
                   $form->banner_image = 'bannerImages/'. $fileName;
                   $form->raiser_images = implode('|' ,$image);
                   $form->save();
                   $preview = FundRaising::where('id',$Formid)->first();
                    $images = explode('|' , $preview->raiser_images);
        
        return view('frontend.gofund-step4',compact('preview' ,'images'));
    }

    public function gofundstep_five(){
           
        return view('frontend.gofund-step5' );
    }
    public function gofundstep_otp(Request $request){
    
     try{
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'email' => 'required|unique:users,email',
            'username' => 'required',
            'telephone' => 'required',
            'password' => 'min:6',
            'confirm_password' => 'required_with:password|same:password|min:6'
        
        ]);


    $user = User::create([
        'full_name' => $request->full_name,
        'email' => $request->email,
        'username' => $request->username,
        'phone' => $request->telephone,
        'password' => Hash::make($request->password),
    ]);

    $otp = sprintf("%06d", mt_rand(1, 999999));

    Mail::send('otp-email', ['otp' => $otp], function($message) use ($user) {
        $message->to($user->email);
        $message->subject('Your OTP');
    });

    $request->session()->put('otp', $otp);
    $request->session()->put('email', $user->email);

 return view('frontend.gofund-step6');
       } 
       catch (\Exception $e)
        {
                return redirect()->back()->withErrors($validator)->withInput();
        }
    }
    public function gofundstep_seven(Request $request)
    {
          $otp = session('otp');
        if($request->otp == $otp) {
         Session::forget('otp');
         $Formid = session('first_form_id');
         $formInfo = FundRaising::where('id',$Formid)->first();
      

        return view('frontend.gofund-step7' ,compact('formInfo'));
            } else
             return view('frontend.gofund-step6');
    }
    public function gofund_login()
    {
     return view('frontend.gofundme-login');
    }
    public function fund_login(Request $request)
    { 
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);
         $user = User::where('email',$request->email)->first();
         if ($user && Hash::check($request->password, $user->password)) {
            // The user is authenticated
        
            $otp = sprintf("%06d", mt_rand(1, 999999));
   
            Mail::send('otp-email', ['otp' => $otp], function($message) use ($user) {
                $message->to($user->email);
                $message->subject('Your OTP');
            });
        
            // Store the OTP in the session for verification later
            $request->session()->put('otp', $otp);
            $request->session()->put('email', $user->email);
        
        
                return view('frontend.gofund-step6');
        }
        return back()->with('error', 'Invaliad Email or Password');         }

        public function index()
        {  
            $FundRaising =  FundRaising::orderByDesc('created_at')->skip(0)->take(9)->get(); 
            return view('frontend.index',compact('FundRaising'));
        }
        public function fetchFunds($fetchFund)
        {
            $fetchFund = FundRaising::where('id',$fetchFund)->first();
            $FundRaising =  FundRaising::orderBy('created_at' , 'ASC')->skip(0)->take(3)->get();
            $images = explode('|' , $fetchFund->raiser_images);          
            return view ('frontend.fundraising-details',compact('fetchFund','images','FundRaising'));
        }
}

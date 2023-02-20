<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FundRaising;
use Image;
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

 try{
        $request->validate([
            'country' => 'required',
            'name' => 'required',
            'location' => 'required',
            'why_fundraising' => 'required',
        ]);
// dd($request->all());
        $FundRaising = new FundRaising;
        $FundRaising->name = $request->name;
        $FundRaising->country = $request->country;
        $FundRaising->location = $request->location;
        $FundRaising->why_fundraising = $request->why_fundraising;
        $FundRaising->save();
        session()->put('first_form_id', $FundRaising->id);
        return view('frontend.gofund-step-2')->with('success', 'User created successfully.');
             } catch (\Exception $e) {
                return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred. Please try again.']);
            }
        }
        
    
    public function gofundstep_three(Request $request ){
          $Formid = session('first_form_id');
          $form = FundRaising::find($Formid);

          $form->fund_name = $request->name_of_fund;
          $form->goal_amount = $request->amount_goal;
          $form->collecting_fund_for = $request->fund_for;
          $form->fund_receive = $request->fund_recive;
          $form->phone_no = $request->phone_no;
          $form->save();

        return view('frontend.gofund-step-3');
    }
    public function gofundstep_four(Request $request){

        
        if($request->hasFile('banner_image')){

            $imageName = strtolower(trim($request->photo->getClientOriginalExtension()));
            $fileName = time() . rand(100, 999) . '.' . $imageName;
            $request->photo->move('bannerImages/', $fileName);
        }
    
        $images = $request->file('raiser_images');
        $imagePaths = [];
        
        foreach($images as $image){
            $imageName = $image->getClientOriginalName();
            $imagePath = $image->storeAs('raiser_images', $imageName, 'public');

        // dd($imagePath);    
                   $Formid = session('first_form_id');
                   $form = FundRaising::find($Formid);
          
                   $form->fund_type = $request->fund_type;
                   $form->s_description = $request->s_description;
                   $form->l_description = $request->l_description;
                   $form->banner_image = 'bannerImages/', $fileName;
                   $form->raiser_images = $imagePath;
                   $form->save();
                   $preview = FundRaising::where('id',$Formid)->first();

        }
        return view('frontend.gofund-step4',compact('preview'));
    }

    public function gofundstep_five(){

        return view('frontend.gofund-step5' );
    }
    public function gofundstep_otp(){

        return view('frontend.gofund-step6');
    }
    public function gofundstep_seven(){

        return view('frontend.gofund-step7');
    }
    public function gofund_login(){

        return view('frontend.gofundme-login');
    }
}

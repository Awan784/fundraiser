<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\FeatureTopic;
use App\Models\FundRaising;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as Session;
use Illuminate\Support\Facades\Validator;

class AdminDashboardController extends Controller
{

    public function login()
    {

        return view('admin.login-page');
    }
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);
        $admin = Admin::where('email', $request->email)->first();
        if (Auth::guard('admins')->attempt($request->only(['email', 'password']))) {
            Auth::guard('admins')->login($admin);
            session()->put('username', $admin->username);
            // dd(session());
            return redirect()->route('admin-dashboard')->with('success', ' Welcome To this Beautiful Dashboard.');;
        }

        return back()->with('error', 'Invaliad Email or Password');
    }
    public function active_fundraiser()
    {

        $fundraisers = FundRaising::all();
        // dd($funraisers);
        return view('admin.active-fundraiser', compact('fundraisers'));
    }
    public function viewfundraiser($id)
    {

        $fundraiser = FundRaising::find($id);
        // dd($fundraisers);
        return view('admin.view-fundraiser', compact('fundraiser'));
    }
    public function editfundraiser($id)
    {

        $fundraiser = FundRaising::find($id);
        // dd($fundraiser);
        return view('admin.edit-fundraiser', compact('fundraiser'));
    }
    public function updatefundraiser(Request $request)
    {
        // dd($request->all());
        $data = FundRaising::find($request->id);
        $data->country = $request->country;
        $data->name = $request->name;
        $data->goal_amount = $request->goal_amount;
        $data->update();
        return redirect()->route('active-fundraiser')->with('status', 'Data Updated Successfully');
    }
    public function deletefundraiser($id)
    {
        $data = FundRaising::findOrFail($id)->delete();
        return redirect()->route('active-fundraiser');
    }

    public function close_fundraiser()
    {

        return view('admin.closed-fundraiser');
    }
    public function featuretopics()
    {
        $topics=FeatureTopic::all();
        return view('admin.feature-topics-list',compact('topics'));
    }
    public function editTopic($id)
    {
        $topic=FeatureTopic::find($id);
        return view('admin.edit-topic',compact('topic'));
    }
    public function updateTopic(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
            // 'topic_image' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('topic_image')) {

            $imageName = strtolower(trim($request->topic_image->getClientOriginalExtension()));
            $fileName = time() . rand(100, 999) . '.' . $imageName;
            $request->topic_image->move(public_path() . '/topicImages/', $fileName);
        }
        $topic=FeatureTopic::find($request->id);
        // dd($request->id);
        $topic->title=$request->title;
        $topic->description=$request->description;
        $topic->status=$request->status;
        if(!empty($fileName)){
        $topic->topic_image=$fileName;
        }
        $topic->update();
        
        return redirect()->back()->with('success','Topic Updated Successfully');

    }
    public function addTopic()
    {

        return view('admin.add-topic');
    }
    public function createTopic(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
            'topic_image' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('topic_image')) {

            $imageName = strtolower(trim($request->topic_image->getClientOriginalExtension()));
            $fileName = time() . rand(100, 999) . '.' . $imageName;
            $request->topic_image->move(public_path() . '/topicImages/', $fileName);
        }
        $topic=FeatureTopic::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status,
            'topic_image'=>$fileName,
        ]);
        return redirect()->route('add-topic')->with('success','Topic Added Successfully');

    }
    public function deleteTopic($id)
    {
        $data = FeatureTopic::findOrFail($id)->delete();
        return redirect()->back()->with('success','Topic Deleted Successfully');
       
    }
    public function viewTopic($id)
    {
        $data = FeatureTopic::findOrFail($id);
        return view('admin.view-feature-topic',compact('data'));
       
    }
    public function commissions()
    {

        return view('admin.commissions');
    }
    public function withdrawls()
    {

        return view('admin.withdrawals');
    }
    public function websiteMessage()
    {

        return view('admin.website-messages');
    }
    public function report()
    {

        return view('admin.reports_list');
    }
    public function user()
    {

        return view('admin.users');
    }
    public function logout()
    {
        Auth::guard('admins')->logout();
        Session::flush();
        // dd(auth());
        return redirect()->route('adminIndex');
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('frontend-index');
Route::middleware('adminAccess')->group(function(){
Route::get('/admins',[AdminDashboardController::class,'login'])->name('adminIndex');
Route::post('/admin/dashboard',[AdminDashboardController::class,'index'])->name('AdminDashboard');
Route::get('/admin-dashboard', function () { return view('admin.index');})->name('admin-dashboard');
Route::get('/admin/active-fundraiser',[AdminDashboardController::class,'active_fundraiser'])->name('active-fundraiser');
Route::get('/admin/active-fundraiser/view-fundraiser/{id}',[AdminDashboardController::class,'viewfundraiser'])->name('view-fundraiser');
Route::get('/admin/active-fundraiser/edit-fundraiser/{id}',[AdminDashboardController::class,'editfundraiser'])->name('edit-fundraiser');
Route::post('/admin/active-fundraiser/update-fundraiser',[AdminDashboardController::class,'updatefundraiser'])->name('update-fundraiser');
Route::get('/admin/active-fundraiser/delete-fundraiser/{id}',[AdminDashboardController::class,'deletefundraiser'])->name('delete-fundraiser');
Route::get('/admin/close-fundraiser',[AdminDashboardController::class,'close_fundraiser'])->name('close-fundraiser');
Route::get('/admin/feature-topics',[AdminDashboardController::class,'featuretopics'])->name('featuretopics');
Route::get('/admin/add-topic',[AdminDashboardController::class,'addTopic'])->name('add-topic');
Route::get('/admin/commissions',[AdminDashboardController::class,'commissions'])->name('commissions');
Route::get('/admin/withdrawls',[AdminDashboardController::class,'withdrawls'])->name('withdrawls');
Route::get('/admin/website-message',[AdminDashboardController::class,'websiteMessage'])->name('website-message');
Route::get('/admin/report',[AdminDashboardController::class,'report'])->name('report');
Route::get('/admin/user',[AdminDashboardController::class,'user'])->name('user');
Route::get('/admin/logout', [AdminDashboardController::class,'logout'])->name('adminlogout');
});
Route::get('/contact-us',[HomeController::class,'contact'])->name('contact');
Route::get('/fundraising',[HomeController::class,'fundraising'])->name('fundraising');
Route::get('how-works',[HomeController::class,'how_works'])->name('how-works');


Route::get('/step-one', function () { return view('frontend.gofund');})->name('fundraiser');
Route::post('/step-one', [HomeController::class, 'stepOne'])->name('submit-step-one');
Route::get('/step-two', function () { return view('frontend.gofund-step-2');})->name('step-two');
Route::post('/step-two', [HomeController::class, 'stepTwo'])->name('submit-step-two');
Route::get('/step-three', function () { return view('frontend.gofund-step-3');})->name('step-three');
Route::post('/step-three', [HomeController::class, 'stepThree'])->name('submit-step-three');
Route::get('/step-four', function () { return view('frontend.gofund-step-3_1');})->name('step-four');
Route::post('/step-four', [HomeController::class, 'stepFour'])->name('submit-step-four');


Route::post('/fundRasing',[HomeController::class,'signin'])->name('gofundstep-2');
Route::post('/fundRa/step',[HomeController::class,'gofundstep_three'])->name('gofundstep-3');
Route::post('/fundRa/step/three',[HomeController::class,'gofundstep_three_one'])->name('gofundstep-3.1');
Route::post('/fundRa/step/four',[HomeController::class,'gofundstep_four'])->name('gofundstep-4');
Route::get('/fundRa/step/five',[HomeController::class,'gofundstep_five'])->name('gofundstep-5');
Route::get('/otp-verification', function () { return view('frontend.gofund-step6');})->name('otp-verification');
Route::get('/fundRa/otp/done',[HomeController::class,'gofundstep_done'])->name('gofund_done');
Route::post('/fundRa/otp/otp-login',[HomeController::class,'gofundstep_otp'])->name('gofund_otp');
Route::post('/fundRa/otp/fund-login',[HomeController::class,'fund_login'])->name('fund_login');
Route::post('/fundRa/step/seven',[HomeController::class,'gofundstep_seven'])->name('gofundstep-7');
Route::get('/gofundme/login',[HomeController::class,'gofund_login'])->name('gofundLogin');
Route::get('/Donation/{FundRaising:id}',[HomeController::class,'fetchFunds'])->name('fetchFund');

 
 //User Dashboard Routes

Route::view('/user/login', 'user.login-page')->name('userlogin');
Route::post('/user/dashoard/', [UserController::class,'login'])->name('userDashboard');

Route::middleware(['auth'])->group(function () {
Route::get('/user-dashboard', function () { return view('user.index');})->name('user-dashboard');
Route::get('/active/fundraiser', [UserController::class,'active_fudraiser'])->name('User-ActiveFundrasier');
Route::put('/activeFundraiser/{id}/status', [UserController::class,'updateStatus']);
Route::get('/active/fundraiser/edit/{FundRaising:id}', [UserController::class,'edit_active_fudraiser'])->name('User-editActiveFundrasier');
Route::put('/active/fundraiser/form/{FundRaising:id}', [UserController::class,'update_active_fudraiser'])->name('activeFundraiser.update');
Route::get('/active/fundraiser/form/{FundRaising:id}', [UserController::class,'show_active_fudraiser'])->name('User-ShowActiveFundrasier');
Route::get('/user/closed/fundraiser',[UserController::class,'closed_fundraiser'])->name('User-ClosedFundrasier');
Route::get('/user/communication',[UserController::class,'user_communication'])->name('User-Communications');
Route::get('/user/new-message',[UserController::class,'new_message'])->name('new-message');
Route::get('/user/contact-us',[UserController::class,'user_contact_us'])->name('User-contactUs');
Route::post('/user/contact-us',[UserController::class,'contact_us'])->name('UserContactUs');
Route::get('/user/withdrawals',[UserController::class,'user_withdrawals'])->name('User-withdrawals');
Route::get('/user/NewWithdrawals',[UserController::class,'user_NewWithdrawals'])->name('User-NewWithdrawals');


Route::get('/user/profile',[UserController::class,'user_profile'])->name('User-Profile');
Route::get('/user/active/logout', [UserController::class,'logout'])->name('User-logout');
Route::get('/user/activefund/{id}/delete', [UserController::class,'activefund_delete'])->name('activefund_delete');


// Route::view('/admin/login','admin.login-page')->name('adminlogin');

Route::post('/change-password', [UserController::class,'changePassword'])->name('user.change-password');


});

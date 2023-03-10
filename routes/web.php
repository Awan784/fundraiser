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
Route::get('/admin',[AdminDashboardController::class,'login'])->name('adminIndex');
Route::get('/admin/dashboard',[AdminDashboardController::class,'index'])->name('AdminDashboard');
Route::get('/admin/active-fundraiser',[AdminDashboardController::class,'active_fundraiser'])->name('active-fundraiser');
// Route::get('/fundraiser',[HomeController::class,'fundraiser'])->name('fundraiser');
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
Route::post('/fundRa/otp/otp-login',[HomeController::class,'gofundstep_otp'])->name('gofund_otp');
Route::post('/fundRa/otp/fund-login',[HomeController::class,'fund_login'])->name('fund_login');
Route::post('/fundRa/step/seven',[HomeController::class,'gofundstep_seven'])->name('gofundstep-7');
Route::get('/gofundme/login',[HomeController::class,'gofund_login'])->name('gofundLogin');
Route::get('/Donation/{FundRaising:id}',[HomeController::class,'fetchFunds'])->name('fetchFund');

Route::view('/user/login', 'user.login-page')->name('userlogin');
Route::post('/user/dashoard/', [UserController::class,'login'])->name('userDashboard');
Route::get('/user-dashboard', function () { return view('user.index');})->name('user-dashboard')->middleware('auth');
Route::get('/user/active/fundraiser', [UserController::class,'active_fudraiser'])->name('User-ActiveFundrasier');
Route::get('/user/active/logout', [UserController::class,'logout'])->name('User-logout');
Route::delete('/user/activefund/{id}/delete', [UserController::class,'activefund_delete'])->name('activefund_delete');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\HomeController;
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

Route::view('/', 'frontend.index')->name('frontend-index');
Route::get('/admin',[AdminDashboardController::class,'login'])->name('adminIndex');
Route::get('/admin/dashboard',[AdminDashboardController::class,'index'])->name('AdminDashboard');
Route::get('/admin/active-fundraiser',[AdminDashboardController::class,'active_fundraiser'])->name('active-fundraiser');
Route::get('/fundraiser',[HomeController::class,'fundraiser'])->name('fundraiser');
Route::get('/contact-us',[HomeController::class,'contact'])->name('contact');
Route::get('/fundraising',[HomeController::class,'fundraising'])->name('fundraising');
Route::get('how-works',[HomeController::class,'how_works'])->name('how-works');
Route::post('/fundRasing',[HomeController::class,'signin'])->name('gofundstep-2');
Route::post('/fundRa/step',[HomeController::class,'gofundstep_three'])->name('gofundstep-3');
Route::post('/fundRa/step/four',[HomeController::class,'gofundstep_four'])->name('gofundstep-4');
Route::get('/fundRa/step/five',[HomeController::class,'gofundstep_five'])->name('gofundstep-5');
Route::get('/fundRa/otp',[HomeController::class,'gofundstep_otp'])->name('gofund_otp');
Route::get('/fundRa/step/seven',[HomeController::class,'gofundstep_seven'])->name('gofundstep-7');
Route::get('/gofundme/login',[HomeController::class,'gofund_login'])->name('gofundLogin');


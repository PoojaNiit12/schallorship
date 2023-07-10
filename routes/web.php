<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\RazorpayController;


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


Route::get('/',[StudentController::class,'home']);
Route::post('save-form',[StudentController::class,'store'])->name('save-form');
Route::post('upload',[StudentController::class,'index'])->name('upload');

// ....paymentid....
Route::post('payment', [paymentController::class,'paymentdata'])->name('payment');

// ...second step eduction.../
Route::post('document',[DocumentController::class,'documentdata'])->name('document');

// ...rozarpay
Route::get('home',[RazorpayController::class,'formPage'])->name('home');
Route::post('rozarpay',[RazorpayController::class,'makerOrder'])->name('rozarpay');
Route::get('success',[RazorpayController::class,'success'])->name('success');


// Route::get('save-data',[StudentController::class,'saveData'])->name('save-data');

// Route::get('/',[DocumentController::class,'home']);





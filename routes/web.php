<?php

// use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/)', function () {
    return view('welcome')->name('dashboard');
});

// Route::get('login',[App\Http\Controllers\Auth\AuthController::class,'index'])->name('login');
// // Route::get('login',[App\Http\Controllers\Auth\AuthController::class,'index'])->name('login');
// Route::get('registration',[App\Http\Controllers\Auth\AuthController::class,'create'])->name('register');
// Route::post('posst-registration', [App\Http\Controllers\Auth\AuthController::class, 'registration'])->name('postregister');
// Route::post('post-login', [App\Http\Controllers\Auth\AuthController::class, 'postlogin'])->name('login.post');

// Route::get('/customer',[App\Http\Controllers\CustomerController::class,'index'])->name('customer.list');
// Route::get('/customer/create',[App\Http\Controllers\CustomerController::class,'create'])->name('customer.create');
// Route::post('/customer/store',[App\Http\Controllers\CustomerController::class,'store'])->name('customer.store');
// Route::get('/customer/edit/{id}',[App\Http\Controllers\CustomerController::class,'edit'])->name('customer.edit');
// Route::Patch('/customer/update/{id}',[App\Http\Controllers\CustomerController::class,'update'])->name('customer.update');
// Route::delete('/customer/delete/{id}',[App\Http\Controllers\CustomerController::class,'destroy'])->name('customer.delete');

Route::resource('customer',App\Http\Controllers\CustomerController::class);

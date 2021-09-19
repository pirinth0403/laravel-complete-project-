<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Maincontroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/


 



Route::get('/',[Maincontroller::class,'login']);
Route::post('cusreg',[UserController::class,'store']);
Route::get('customerreg',[Maincontroller::class,'customerreg']);
Route::get('/checkshow',[Maincontroller::class,'showmain']);
Route::post('/checklogin',[MainController::class,'checklogin']);
Route::get('/successlogin',[MainController::class,'successlogin']);



Route::get('product',[ProductController::class,'index']);
Route::get('placeorder',[ProductController::class,'orderplace']);
Route::get('/placeorder/{products}',[ProductController::class,'showtoOrder'])->name('placeorder');



Route::resource('products',ProductController::class);
Route::resource('employees',EmployeeController::class);
Route::resource('users',UserController::class);
Route::resource('orders',OrderController::class);



Route::patch('/update/{id}',[MainController::class,'update'])->name('update');
Route::get('/edit/{id}',[MainController::class,'edit'])->name('editx');


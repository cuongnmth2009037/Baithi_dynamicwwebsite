<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LayoutDemoController;
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

Route::get('/customer/register',[CustomerController::class,'register'])->name('register');
Route::post('/success_register',[CustomerController::class,'success_register'])->name('success_register');

//Demo:
Route::get('/demo/layout/table',[LayoutDemoController::class,'display_Table']);
Route::get('/demo/layout/form',[LayoutDemoController::class,'display_Form']);
Route::get('/demo/layout/master',[LayoutDemoController::class,'display_Master_Layout']);
//Demo

//CRUD:
Route::get('/admin/event/create',[EventController::class,'create']);
Route::post('/admin/event',[EventController::class,'store']);
Route::get('/admin/event',[EventController::class,'index']);
Route::get('/admin/event/edit/{id}',[EventController::class,'edit']);
Route::put('/admin/event/{id}',[EventController::class,'update']);
Route::delete('/admin/event/{id}',[EventController::class,'destroy']);



//CRUD

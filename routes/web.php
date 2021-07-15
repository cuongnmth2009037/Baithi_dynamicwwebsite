<?php

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

Route::get('/customer/register',[\App\Http\Controllers\CustomerController::class,'register'])->name('register');
Route::post('/success_register',[\App\Http\Controllers\CustomerController::class,'success_register'])->name('success_register');

//Demo:
Route::get('/demo/layout/table',[\App\Http\Controllers\LayoutDemoController::class,'display_Table']);
Route::get('/demo/layout/form',[\App\Http\Controllers\LayoutDemoController::class,'display_Form']);
Route::get('/demo/layout/master',[\App\Http\Controllers\LayoutDemoController::class,'display_Master_Layout']);


//Demo

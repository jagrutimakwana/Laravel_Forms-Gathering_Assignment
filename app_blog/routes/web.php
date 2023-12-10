<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;
use App\Http\Controllers\blogController;

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

Route::get('/login',[customerController::class,'login']);
Route::post('/login_auth',[customerController::class,'login_auth']);

Route::get('/logout',[customerController::class,'logout']);

Route::get('/signup',[customerController::class,'create']); 
Route::post('/signup',[customerController::class,'store']);

Route::get('/blog',[blogController::class,'create']);
Route::post('/blog',[blogController::class,'store']);

Route::get('/viewblog',[blogController::class,'show']);
Route::get('/viewblog/{id}',[blogController::class,'destroy']);


Route::get('/editblog/{id}',[blogController::class,'edit']);

Route::post('/update/{id}',[blogController::class,'update']);



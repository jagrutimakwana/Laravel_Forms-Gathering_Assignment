<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;
use App\Http\Controllers\adminController;

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

Route::get('/view_cust', function () {
    return view('viewdata/view_cust');
});

Route::get('/signup',[customerController::class,'create']); 
Route::post('/signup',[customerController::class,'store']);

Route::get('/view_cust',[customerController::class,'show']);
Route::get('/view_cust/{id}',[customerController::class,'destroy']);


Route::get('/editdata/{id}',[customerController::class,'edit']);

Route::post('/update/{id}',[customerController::class,'update']);
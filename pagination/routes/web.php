<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;
use App\Http\Controllers\employeeController;


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

Route::get('/emp_login',[employeeController::class,'emp_login']);
Route::post('/elogin_auth',[employeeController::class,'login_auth']);

Route::get('/emplogout',[employeeController::class,'logout']);

Route::get('/dashboard', function () {
    return view('employee/dashboard');
});

Route::get('/manage_cus',[customerController::class,'show']);
Route::get('/manage_cus/{id}',[customerController::class,'destroy']);




<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });






Route::group(['middleware'=>'web'],function(){

//Login Controller
Route::get('/auth/login',[LoginController::class,'loginshow']);
Route::get('/auth/register',[LoginController::class,'reg']);
Route::post('/savedata',[LoginController::class,'registerdata'])->name('registerdata');
Route::post('/logedin',[LoginController::class,'login']);
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

   //Employee Controller
   Route::get('/admin/user',[EmployeeController::class,'show']);
   Route::post('/save',[EmployeeController::class,'store'])->name('store');
   Route::get('/admin/display',[EmployeeController::class,'showdata'])->name('admin/display');
   Route::get('/admin/view/{id}',[EmployeeController::class,'viewdata']);
   Route::get('/admin/edit/{id}',[EmployeeController::class,'editshow']);
   Route::post('/editdata',[EmployeeController::class,'update'])->name('update');
   Route::get('delete/{id}',[EmployeeController::class,'erase']);


});
// Route::get('/auth/login',[LoginController::class,'login1']);


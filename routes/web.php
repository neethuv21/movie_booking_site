<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\movieController;

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
Route::get('/index',[movieController::class,'index']);
Route::get('/register',[movieController::class,'register']);
Route::post('/insert',[movieController::class,'insert']);
Route::get('/login',[movieController::class,'login']);
Route::post('/loginaction',[movieController::class,'loginaction']);
Route::get('/logout',[movieController::class,'logout']);
Route::get('/adminlogin',[movieController::class,'adminlogin']);
Route::post('/adminloginaction',[movieController::class,'adminloginaction']);
Route::get('/booking',[movieController::class,'booking']);
Route::post('/bookinsert',[movieController::class,'bookinsert']);
Route::get('/bdetails',[movieController::class,'bdetails']);
Route::get('/edit/{id}',[movieController::class,'edit']);
Route::post('/editaction/{id}',[movieController::class,'editaction']);

Route::get('/delete/{bid}',[movieController::class,'delete']);
Route::get('/admin',[movieController::class,'admin']);
Route::get('/adminapprove/{id}',[movieController::class,'adminapprove']);
Route::get('/admincancel/{id}',[movieController::class,'admincancel']);
Route::get('/adminlogout',[movieController::class,'adminlogout']);


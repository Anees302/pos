<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::controller(AuthController::class)->group(function(){
Route::get('/showLogin','showLogin')->name('showLogin');
Route::get('/create','create')->name('create');
Route::post('/register','register')->name('register');
Route::post('/login','login')->name('login');
Route::post('/logout','logout')->name('logout');

});

Route::get('/dashboard',function (){return view('dashboard');});


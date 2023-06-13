<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/dashboard',function (){return view('dashboard');})->name('dashboard');

Route::controller(ProductController::class)->group(function (){
Route::get('/products','index')->name('products.index');
Route::get('/products/create','create')->name('products.create');
Route::post('/products/store','store')->name('products.store');
Route::get('/products/edit/{product}','edit')->name('products.edit');
Route::put('/products/{product}','update')->name('products.update');
Route::delete('/products/{product}','destroy')->name('products.delete');
});

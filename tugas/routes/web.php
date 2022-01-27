<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserSController;
use Illuminate\Routing\RouteUrlGenerator;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AuthController;


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

Route::get('/w', function () {
    return view('welcome');
});

Route::get('', function(){
    return view('tamplate.base');
});

Route::get('/homepage', function(){
    return view('homepage');
});

Route::get('/Singleproduk', function(){
    return view('Singleproduk');
});


Route::get('Cobe', [TestController::class, 'showDashboard']);
Route::get('pro', [ProdukController::class, 'index']);
Route::get('up', [UserController::class, 'index']);
Route::get('kat', [TestController::class, 'showkategori']);
Route::get('daftar', [TestController::class,'showdaftar']);


Route::resource('produk', ProdukController::class);

Route::resource('user', UserController::class);

Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'loginProcess']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/coffeeVariant', function () {
    return view('coffeeVariant');
});
Route::get('/coffeeHistory', function () {
    return view('coffeeHistory');
});
Route::get('/coffeeTools', function () {
    return view('coffeeTools');
});
Route::get('/adminPage', function () {
    return view('adminPage');
});
Route::get('/adminUpdate', function () {
    return view('adminUpdate');
});
Route::get('/adminDelete', function () {
    return view('adminDelete');
});

Route::post('/adminPage', [CoffeeController::class, 'insert']);
Route::post('/adminUpdate', [CoffeeController::class, 'update']);
Route::post('/adminDelete', [CoffeeController::class, 'delete']);
Route::get('/coffeeVariant', [CoffeeController::class, 'show']);

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'loginStore'])->name('loginStore');

Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'registerStore'])->name('registerStore');

Route::post('/adminstore',[AdminController::class,'adminstore'])->name('adminstore');

Route::get('/logout',[AuthController::class,'logout'])->name('logout');

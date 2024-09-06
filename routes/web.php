<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;

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

//Halaman Home
Route::get('/home', [HomeController::class,'index']);

//Category Halaman Products
Route::prefix('/category')->group(function () {
    Route::get('/foodbeverage', [ProductController::class, 'food']);
    Route::get('/beauty-health', [ProductController::class, 'beauty']);
    Route::get('/home-care', [ProductController::class, 'homecare']);
    Route::get('/baby-kid', [ProductController::class, 'babykid']);
    });

//Halaman User
Route::get('/user/{id}/name/{name}', [UserController::class,'user']);

//Halaman Penjualan
Route::get('/transaksi', [PenjualanController::class,'penjualan']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\LoginCotroller;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/shop', [ShopController::class, 'index']);

Route::get('/login', [LoginCotroller::class, 'index']);

Route::get('/cart', [CartController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin/login', [AdminController::class, 'login']);

Route::get('/admin/table', [AdminController::class, 'table']);
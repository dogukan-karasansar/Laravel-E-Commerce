<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('/add-cart/{product}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index')->middleware('auth:sanctum');
Route::get('/cart/destroy/{id}', [CartController::class, 'destroy'])->name('cart.destroy')->middleware('auth:sanctum');
Route::get('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update')->middleware('auth:sanctum');
Route::get('/cart/order', [CartController::class, 'save'])->name('cart.save')->middleware('auth:sanctum');

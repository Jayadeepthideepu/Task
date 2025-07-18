<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

Route::get('/', [ShopController::class, 'index']);
Route::get('/product/{slug}', [ShopController::class, 'show']);
Route::post('/cart/add', [CartController::class, 'add']);
Route::get('/cart', [CartController::class, 'index']);
Route::post('/checkout', [OrderController::class, 'store']);

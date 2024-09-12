<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\FrontController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\CardController;
use \App\Http\Controllers\CheckoutController;
use \App\Http\Controllers\OrderController;


Route::get('/', [FrontController::class , "index"]);
Route::get('/urun-listesi', [ProductController::class , "productList"]);
Route::get('/urun-detay', [ProductController::class , "productDetail"]);
Route::get('/siparislerim', [OrderController::class , "myOrders"]);
Route::get('/siparislerim-detay', [OrderController::class , "myOrderDetail"]);
Route::get('/sepet', [CardController::class , "card"]);
Route::get('/odeme', [CheckoutController::class , "checkOut"]);

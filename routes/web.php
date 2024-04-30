<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/create', [ProductsController::class, 'create']);
Route::post('/products', [ProductsController::class, 'store']);
Route::delete('/products/{id}', [ProductsController::class, 'destroy']);

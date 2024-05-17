<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'view']);

Route::get('/products', [ProductController::class, 'view']);

Route::get('/product/create', [ProductController::class, 'create']);

Route::post('/product/store', [ProductController::class, 'store']);

Route::get('/product/edit/{id}', [ProductController::class, 'edit']);

Route::patch('/product/update/{id}', [ProductController::class, 'update']);

Route::delete('/product/delete/{id}', [ProductController::class, 'delete']);


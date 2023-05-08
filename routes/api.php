<?php

use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\RegisterController;
use Illuminate\Support\Facades\Route;

Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::post('login', [RegisterController::class, 'login'])->name('login');

Route::middleware('auth:sanctum')->group(function () {

    // Route::resource('products', ProductController::class);
    
    Route::get('/products', [ProductController::class, 'index'])->name('index');
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('show');
    Route::post('/products', [ProductController::class, 'store'])->name('create');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('delete');
});
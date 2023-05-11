<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '<a href="/products">Products</a><br><a href="/categories">Categories</a>';
});

Route::get('/products', [FrontendController::class, 'products'])->name('products');
Route::get('/categories', [FrontendController::class, 'categories'])->name('categories');
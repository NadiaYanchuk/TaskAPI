<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/', function () {
    return '<a href="/products">Products</a><br><a href="/categories">Categories</a>';
});

Route::get('/products', [FrontendController::class, 'products']);
Route::get('/categories', [FrontendController::class, 'categories']);

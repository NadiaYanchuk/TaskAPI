<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return '<a href="/products">Products</a><br><a href="/categories">Categories</a>';
});

Route::get('/products', [FrontendController::class, 'products']);
Route::get('/categories', [FrontendController::class, 'categories']);

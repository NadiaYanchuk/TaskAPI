<?php

// Route::middleware('auth_api')->get('/user/{id}', function(Request $request, $id){
//     $user = \App\Models\User::find($id);

//     return 'test';
//     if(!$user) return response('', 404);

//     return $user;
// });

use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\RegisterController;
use Illuminate\Support\Facades\Route;

Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::post('login', [RegisterController::class, 'login'])->name('login');

Route::middleware('auth:sanctum')->group(function () {
    
    // Route::resource('products', ProductController::class);
    Route::get('products', [ProductController::class, 'index']);
});
<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class,'list']);
});

Route::prefix('user')->group(function(){
    Route::post('/', [UserController::class, 'authorization']);
});

Route::prefix('main_products')->group(function () {
    Route::get('/', [ProductController::class,'mainProducts']);
});

Route::prefix('products1')->group(function () {
    Route::get('/', [ProductController::class,'products1']);
});

Route::prefix('products2')->group(function () {
    Route::get('/', [ProductController::class,'products2']);
});

Route::prefix('products3')->group(function () {
    Route::get('/', [ProductController::class,'products3']);
});

Route::prefix('cart')->group(function(){
    Route::get('/{userId}', [\App\Http\Controllers\CartController::class, 'info']);
    Route::post('/', [\App\Http\Controllers\CartController::class, 'addToCart']);
});

<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Api\SaleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use OpenApi\Attributes as OAT;

Route::controller(LoginController::class)->prefix('auth')->group(function() {
    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:sanctum');

    Route::post('/login', [LoginController::class, 'apiLogin']);

    Route::delete('/logout', [LoginController::class, 'revokeToken'])->middleware('auth:sanctum');
});

Route::controller(ProductController::class)->prefix('products')->group(function(){
    Route::get('list', 'find');
    Route::get('show/{slug}', 'findOne');
});

Route::middleware('auth:sanctum')->controller(SaleController::class)->prefix('sales')->group(function(){
    Route::post('store', 'store');
    Route::put('update/{sale}', 'update');
    Route::get('', 'index');
    Route::get('show/{sale}', 'show')->whereNumber('sale');
    Route::delete('delete/{sale}', 'destroy')->whereNumber('sale');
});

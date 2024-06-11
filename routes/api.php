<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['auth:sanctum'])->group(function () {
    Route::group(['prefix' => 'clients'], function () {
        Route::get('/', [ClientController::class, 'index']);
        Route::middleware(['is_admin'])->post('/', [ClientController::class, 'store']);
        Route::middleware(['is_admin'])->get('/{client}', [ClientController::class, 'show']);
        Route::middleware(['is_admin'])->put('/{client}', [ClientController::class, 'update']);
        Route::middleware(['is_admin'])->delete('/{client}', [ClientController::class, 'destroy']);
    });

    Route::group(['prefix' => 'products'], function () {
        Route::get('/', [ProductController::class, 'index']);
        Route::middleware(['is_admin'])->post('/', [ProductController::class, 'store']);
        Route::middleware(['is_admin'])->get('/{product}', [ProductController::class, 'show']);
        Route::middleware(['is_admin'])->put('/{product}', [ProductController::class, 'update']);
        Route::middleware(['is_admin'])->delete('/{product}', [ProductController::class, 'destroy']);
    });

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class, 'index']);
        Route::middleware(['is_admin'])->post('/', [CategoryController::class, 'store']);
        Route::middleware(['is_admin'])->get('/{category}', [CategoryController::class, 'show']);
        Route::middleware(['is_admin'])->put('/{category}', [CategoryController::class, 'update']);
        Route::middleware(['is_admin'])->delete('/{category}', [CategoryController::class, 'destroy']);
    });
});

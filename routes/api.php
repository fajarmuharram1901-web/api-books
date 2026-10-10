<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\AuthController;

// Acara 25: REST API Book
Route::apiResource('books', BookController::class);

// Acara 27: Authentication API
Route::post('/login', [AuthController::class, 'login']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryPortofolioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [AuthController::class, 'login']);
Route::apiResource('categories', CategoryPortofolioController::class);
Route::get('/categories', [CategoryPortofolioController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/contact', [ContactController::class, 'index']);
Route::delete('/contact/{id}', [ContactController::class, 'destroy']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

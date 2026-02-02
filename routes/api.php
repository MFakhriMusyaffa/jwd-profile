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

<<<<<<< HEAD
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/contact', [ContactController::class, 'store']);
=======
Route::post('/login', [AuthController::class, 'login']);
Route::apiResource('categories', CategoryPortofolioController::class);
Route::get('/categories', [CategoryPortofolioController::class, 'index']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
>>>>>>> 8609033a614688daa5a3764a1522e1af1aeb1aa1

<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CreateProductController;
use App\Http\Controllers\GetProductController;
use App\Http\Controllers\Users\CreateUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/user', CreateUserController::class);
Route::post('/login', LoginController::class);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/product', GetProductController::class);
    Route::post('/product', CreateProductController::class);
});

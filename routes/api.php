<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarsController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cars', [CarsController::class, 'index']);
Route::post('/cars', [CarsController::class, 'store']);
Route::get('/cars/{id}', [CarsController::class, 'show']);
Route::delete('/cars/{id}', [CarsController::class, 'destroy']);


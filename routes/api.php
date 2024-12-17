<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/products', [ProductController::class, 'index']);           // List products
    Route::post('/products', [ProductController::class, 'store']);         // Create product
    Route::get('/products/{id}', [ProductController::class, 'show']);      // Show product
    Route::put('/products/{id}', [ProductController::class, 'update']);    // Update product
    Route::delete('/products/{id}', [ProductController::class, 'destroy']); // Delete product
});


Route::get('/login', function () {
    return [
        'status' => 404,
        'message' => 'Authorization'
    ];
})->name('login');



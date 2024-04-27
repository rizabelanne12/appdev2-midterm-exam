<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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


Route::middleware('extract.token')->group(function(){
    Route::get('/uploads', [ProductController::class, 'index']); 
    Route::post('/uploads', [ProductController::class, 'store']);  
    Route::get('uploads/{upload}', [ProductController::class, 'show']);
    Route::put('uploads/{upload}', [ProductController::class, 'update']);
    Route::delete('uploads/{upload}', [ProductController::class, 'destroy']);
    // Route::post('upload', [ProductController::class , 'uploadImagePublic']);
    
});

// Route::apiResource('upload', ProductController::class)->middleware('extract.token');





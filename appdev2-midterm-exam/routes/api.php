<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\ProductAccessMiddleware;

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


// Route::middleware('extract.token')->group(function(){
//     Route::get('/uploads', [ProductController::class, 'index']); 
//     Route::post('/uploads', [ProductController::class, 'store']);  
//     Route::get('upload/{uploads}', [ProductController::class, 'show']);
//     Route::put('upload/{uploads}', [ProductController::class, 'update']);
//     Route::delete('upload/{uploads}', [ProductController::class, 'destroy']);
//     Route::post('upload', [ProductController::class , 'uploadImagePublic']);
    
// });

// Route::apiResources('upload', ProductController::class)->middleware('extract.token');


// Route::middleware('extract.token')->group(function () {
//    Route::apiResource('uploads', ProductController::class);
//    Route::post('upload', [ProductController::class , 'uploadImagePublic']);
// });



Route::middleware('extract.token')->group(function(){
    Route::apiResource('products', ProductController::class);
    Route::post('products/upload/local', [ProductController::class, 'uploadImageLocal']);
    Route::post('products/upload/public', [ProductController::class, 'uploadImagePublic']);
});
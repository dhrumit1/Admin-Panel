<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminAPIController;
use App\Http\Controllers\scAPIController;

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

// Route::get("/adminAPI",[adminAPIController::class,'index']);

// Route::get("/adminAPI/{id}",[adminAPIController::class,'show']);

// Route::get("/scAPI",[adminAPIController::class,'index']);

Route::post("/scAPI",[scAPIController::class,'store']);

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Klientet;
use App\Models\Porosite;
use App\Http\Controllers\ShikoporositeController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/porosite', [ShikoporositeController::class, 'index']);
Route::post('/pagesat', [ShikoporositeController::class, 'store']);
Route::put('/perditso_pagesen/{id}', [ShikoporositeController::class, 'update']);
Route::delete('/fshi_pagesat/{id}', [ShikoporositeController::class, 'destroy']);

<?php

use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')
//     ->get('/me', [\App\Http\Controllers\Me\MeController::class, 'show']);
Route::post('/login', \App\Http\Controllers\Auth\LoginController::class);
// Route::middleware('auth:sanctum')
//     ->post('/logout', \App\Http\Controllers\Auth\LogoutController::class);

Route::group(['middleware' => ['web', 'auth:sanctum']], function () {
    Route::get('/me', [\App\Http\Controllers\Me\MeController::class, 'show']);
    Route::post('/logout', \App\Http\Controllers\Auth\LogoutController::class);
});

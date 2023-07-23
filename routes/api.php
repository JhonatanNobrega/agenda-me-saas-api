<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/me', [\App\Http\Controllers\Me\MeController::class, 'show']);
    Route::post('/logout', \App\Http\Controllers\Auth\LogoutController::class);
});

Route::post('/login', \App\Http\Controllers\Auth\LoginController::class);
Route::post('/register', \App\Http\Controllers\Auth\RegisterController::class);

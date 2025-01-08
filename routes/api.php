<?php

use App\Http\Controllers\DiscordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/login', [DiscordController::class, 'login'])
    ->name('login');

Route::get('/logout', [DiscordController::class, 'logout'])
    ->name('logout');

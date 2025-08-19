<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

Route::get('/', function () {
    return view('welcome');
});

// API routes
Route::get('api/hello', [HelloController::class, 'hello']);
Route::get('api/hello/json', [HelloController::class, 'helloJson']);
Route::get('api/hello/{name}', [HelloController::class, 'helloName']);

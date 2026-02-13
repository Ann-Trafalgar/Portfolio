<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController; // <-- IMPORTANT: Add this line

Route::get('/', function () {
    return view('welcome');
});

Route::post('/chat', ChatController::class);
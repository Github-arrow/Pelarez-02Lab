<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration',[UserController::class, 'registration']);
Route::post('/register',[UserController::class, 'register']);


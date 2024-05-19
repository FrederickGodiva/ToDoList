<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::view('/', 'welcome');

Route::resource('/home', TodoController::class);

Route::view('/login', 'login.index', [
    'title' => 'Login'
]);

Route::view('/register', 'register.index', [
    'title' => 'Register'
]);
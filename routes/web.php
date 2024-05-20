<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return redirect('/login');
});

// ! Error
// Route::resource('/home', TodoController::class)->middleware('auth');

Route::get('/home', [TodoController::class, 'index'])->middleware('auth');
Route::post('/home', [TodoController::class, 'store'])->middleware('auth');
Route::patch('/home/{todo:id}', [TodoController::class, 'update'])->middleware('auth');
Route::delete('/home/{todo:id}', [TodoController::class, 'destroy'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);
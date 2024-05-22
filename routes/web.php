<?php

<<<<<<< HEAD
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
=======
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleLoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
>>>>>>> 91941c7 (feat: convert to laravel 10)

Route::get('/', function () {
    return redirect('/login');
});

// ! Error
// Route::resource('/home', TodoController::class)->middleware('auth');
<<<<<<< HEAD

Route::middleware('auth')->group(function () {
    Route::get('/home', [TodoController::class, 'index']);
    Route::post('/home', [TodoController::class, 'store']);
    Route::patch('/home/{todo:id}', [TodoController::class, 'update']);
    Route::delete('/home/{todo:id}', [TodoController::class, 'destroy']);
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
=======
Route::get('/home', [TodoController::class, 'index']);

Route::post('/home', [TodoController::class, 'store']);
Route::patch('/home/{todo:id}', [TodoController::class, 'update']);
Route::delete('/home/{todo:id}', [TodoController::class, 'destroy']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store'])->name('register');
>>>>>>> 91941c7 (feat: convert to laravel 10)

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/auth/redirect', [GoogleLoginController::class, 'redirect']);
Route::get('/auth/google/callback', [GoogleLoginController::class, 'callback']);

Route::post('/logout', [LoginController::class, 'logout']);
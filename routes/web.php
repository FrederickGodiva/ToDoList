<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/home', function () {
    return view('home.index', [
        'title' => 'Home'
    ]);
});

Route::view('/login', 'login.index', [
    'title' => 'Login'
]);

Route::get('/register', function() {
    return view('register.index', [
        'title' => 'Register'
    ]);
});
<?php

use App\Http\Controllers\ToDoListController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/home', function () {
    return view('home.index');
});
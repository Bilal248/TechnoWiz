<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcomePage', function () {
    return view('welcomePage');
});

Route::get('/register', function () {
    return view('register');
});

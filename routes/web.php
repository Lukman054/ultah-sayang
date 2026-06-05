<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/password', function () {
    return view('password');
});

Route::get('/home', function () {
    return view('home');
});
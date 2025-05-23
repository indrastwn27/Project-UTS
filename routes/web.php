<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});

Route::get('/report', function () {
    return view('report');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/impact', function () {
    return view('impact');
});
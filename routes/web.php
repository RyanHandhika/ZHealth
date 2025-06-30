<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/bmi', function () {
    return view('bmi');
});

Route::get('/stressMeter', function () {
    return view('stress');
});

Route::get('/article/artikel1', function () {
    return view('article/artikel1');
});

Route::get('/article/artikel2', function () {
    return view('article/artikel2');
});

Route::get('/article/artikel3', function () {
    return view('article/artikel3');
});

Route::get('/article/artikel4', function () {
    return view('article/artikel4');
});
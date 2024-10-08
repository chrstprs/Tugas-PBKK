<?php

use Illuminate\Support\Facades\Route;

Route::get('home', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('skill', function () {
    return view('skill');
});


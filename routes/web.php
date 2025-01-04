<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainpage');
});

Route::get('/reviews', function () {
    return view('reviews');
});

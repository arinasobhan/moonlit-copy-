<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('mainpage');
});

Route::get('/reviews', function () {
    return view('reviews');
});

Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

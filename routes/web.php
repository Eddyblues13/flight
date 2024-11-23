<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home.homepage');
});

Route::get('/flight-list', function () {
    return view('home.flightlist');
});

Route::get('/booking', function () {
    return view('home.booking');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

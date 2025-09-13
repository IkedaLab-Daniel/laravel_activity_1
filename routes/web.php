<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// > Exercise 1
Route::get('/hello', function () {
    return "Hello Laravel!";
});

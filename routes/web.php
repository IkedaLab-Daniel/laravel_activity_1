<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// > Exercise 1
Route::get('/hello', function () {
    return "Hello Laravel!";
});

// > Exercuse 2
// ? About
Route::get('/about', function() {
    return "This is About Page";
});

// ? Contact
Route::get('/contact', function () {
    return "This is Contact Page";
});

// ? Greet/{name}
Route::get('/greet/{name}', function ($name) {
    return "Hello, {$name}";
});

// > Exercise 3 (routing part)
Route::get("/students", [StudentController::class, 'index']);
Route::get("/students/{id}", [StudentController::class, 'show']);
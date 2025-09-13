<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Models\Activity;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // > Exercise 4 (title variable rendering)
    return view('welcome', ['title' => 'Laravel Blade Practice']);
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // > Exercise 3 (routing part)
    Route::get("/students", [StudentController::class, 'index'])->name('students.index');
    Route::get("/students/create", [StudentController::class, 'create'])->name('students.create'); // > Exercise 7
    Route::post("/students", [StudentController::class, 'store'])->name('students.store'); // > Exercise 7
    Route::get("/students/{id}", [StudentController::class, 'show'])->name('students.show');

    // > Exercise 9
    Route::get('/activities', function () {
        $activities = Activity::orderBy('created_at', 'desc')->get();
        return view('activities', compact('activities'));
    })->name('activities.index');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
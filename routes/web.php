<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RekomController;
use App\Http\Controllers\AuthController; // <<< PASTIKAN INI ADA
use Illuminate\Support\Facades\Auth;

// --- START: Public Routes ---

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pusatinfo', function () {
    return view('pusatinfo');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});

// Auth Routes (Views)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Auth Handlers (Logic - POST)
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// --- END: Public Routes ---


// --- START: Protected Routes (Requires Auth) ---

Route::middleware(['auth'])->group(function () {

    // Dashboard (Hanya bisa diakses setelah login)
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Protected Skincare Recommendation Routes (Hanya bisa diakses setelah login)
    Route::get('/rekom', [RekomController::class, 'index'])->name('rekom.index');
    Route::post('/rekom', [RekomController::class, 'submit'])->name('rekom.submit');
    Route::post('/submit', [RekomController::class, 'submit'])->name('form.submit');
});

// --- END: Protected Routes ---
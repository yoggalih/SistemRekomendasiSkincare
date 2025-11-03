<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pusatinfo', function () {
    return view('pusatinfo');
});

Route::get('/rekom', function () {
    return view('rekom');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});

// Route to get all recommendations
use App\Http\Controllers\RekomController;
Route::get('/rekom', [RekomController::class, 'index']);
// Route::get('/rekom', [RekomController::class, 'rekom']);
 Route::post('/submit', [RekomController::class, 'submit'])->name('form.submit');

Route::get('/rekom', [RekomController::class, 'index'])->name('rekom.index');
Route::post('/rekom', [RekomController::class, 'submit'])->name('rekom.submit');

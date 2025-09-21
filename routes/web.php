<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});


// Route using controllers
Route::get('/home-1', [LandingController::class, '__invoke'])->name('home-1');


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

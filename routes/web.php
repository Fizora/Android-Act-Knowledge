<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('auth/login');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    // dashboard routes
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
    // users routes
    Route::get('users', function () {
        return Inertia::render('users');
    })->name('users');
    // units routes
    Route::get('units', function () {
        return Inertia::render('units');
    })->name('units');
    // sites routes
    Route::get('sites', function () {
        return Inertia::render('sites');
    })->name('sites');
    // roles routes
    Route::get('roles', function () {
        return Inertia::render('roles');
    })->name('roles');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::view('/', 'welcome');

Route::get('blogs', [BlogController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('blogs');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

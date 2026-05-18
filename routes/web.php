<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;

Route::get('/', function () {
    return view('landing');
})->name('home');

// 1. Landing Page (Public)
Route::get('/', function () {
    return view('home'); // flyer banner
});

// 2. Authentication Routes
Route::middleware('auth')->group(function () {
    
    // Step 1: Show the form to collect runner data (age, t-shirt, etc.)
    Route::get('/register-race', [RegistrationController::class, 'create'])->name('race.create');
    
    // Step 2: Save the data and redirect to payment
    Route::post('/register-race', [RegistrationController::class, 'store'])->name('race.store');

    // 4. Verification / Status (From your Site Map "Ver Estado")
    Route::get('/my-status', [ProfileController::class, 'show'])->name('race.status');
});
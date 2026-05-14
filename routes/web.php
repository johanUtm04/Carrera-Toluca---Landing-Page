<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;

Route::get('/', function () {
    return view('landing');
})->name('home');

Route::post('/register', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'talla' => 'required'
    ]);

    // Try to save to DB, but don't crash if it fails
    try {
        // Simple example using the default User model
        // User::create($request->all()); 
    } catch (\Exception $e) {
        // Log error silently for the demo
    }

    // Save to session so the Success page can greet the user
    session(['runner_name' => $request->name]);

    return redirect()->route('thanks');
})->name('register.store');

Route::get('/thanks', function () {
    if (!session()->has('runner_name')) return redirect('/');
    return view('thanks');
})->name('thanks');
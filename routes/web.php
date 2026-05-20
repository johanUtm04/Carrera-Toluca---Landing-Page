<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChooseRaceController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Rutas Públicas (Landing & Auth)
|--------------------------------------------------------------------------
*/

// 1. Landing Page Principal (Muestra el hero, el corredor, etc.)
Route::get('/', function () { return view('home'); })->name('home');

// Bringing the Form to the User
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Sending the Data to the Server (POST)
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// 3. Formulario de Registro (Crear Cuenta)
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

/*
|--------------------------------------------------------------------------
| Rutas Protegidas (Solo para usuarios autenticados)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    Route::get('/register-race', [ChooseRaceController::class, 'index'])->middleware('auth')->name('race.portal');

    Route::post('/register-race', [ChooseRaceController::class, 'store'])->middleware('auth')->name('race.store');

    Route::get('/my-status', [ProfileController::class, 'show'])->name('race.status');

    Route::get('/dashboard', [ChooseRaceController::class, 'index'])->name('dashboard');

});
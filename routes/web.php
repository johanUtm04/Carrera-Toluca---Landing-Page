<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Rutas Públicas (Landing & Auth)
|--------------------------------------------------------------------------
*/

// 1. Landing Page Principal (Muestra el hero, el corredor, etc.)
Route::get('/', function () {
    return view('home');
})->name('home');

// 2. Formulario de Login (Aquí renderizas el formulario premium que hicimos)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

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
    
    // Paso 1: Mostrar el formulario para capturar datos del corredor (Talla de playera, edad, etc.)
    Route::get('/register-race', [RegistrationController::class, 'create'])->name('race.create');
    
    // Paso 2: Guardar los datos del corredor en la Base de Datos
    Route::post('/register-race', [RegistrationController::class, 'store'])->name('race.store');

    // Paso 3: Ver Estado de Inscripción / Validar perfil (Tu sección "Ver Estado" del mapa)
    Route::get('/my-status', [ProfileController::class, 'show'])->name('race.status');
});
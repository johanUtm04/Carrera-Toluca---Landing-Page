<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChooseRaceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\StripeWebhookController;

/*
|--------------------------------------------------------------------------
| Rutas Públicas (Landing & Auth)
|--------------------------------------------------------------------------
*/

// 1. Landing Page Principal (Muestra el hero, el corredor, etc.)
Route::get('/', function () { return view('index'); })->name('home');

// Bringing the Form to the User
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Sending the Data to the Server (POST)
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// 3. Formulario de Registro (Crear Cuenta)
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', [RegistrationController::class, 'store']);

// 4. The endpoint where Stripe will post payment confirmation data
Route::post('/stripe/webhook', [StripeWebhookController::class, 'handleWebhook']);
// 5. Success Page after payment
Route::get('/payment-success', [RegistrationController::class, 'paymentSuccess'])->name('checkout.success');
// 6. Sold Out Page if the limit of paid runners is reached
Route::get('/sold-out', [RegistrationController::class, 'soldOut'])->name('race.soldout');

/*
|--------------------------------------------------------------------------
| Rutas Protegidas (Solo para usuarios autenticados)
|--------------------------------------------------------------------------
*/
Route::middleware('auth:web')->group(function () {
    Route::get('/register-race', [ChooseRaceController::class, 'index'])->name('race.portal');
    Route::post('/register-race', [ChooseRaceController::class, 'store'])->name('race.store');
    Route::get('/my-status', [ProfileController::class, 'show'])->name('race.status');
    Route::get('/dashboard', [ChooseRaceController::class, 'index'])->name('dashboard');
});
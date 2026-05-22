<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// 💡 Importamos las clases de Stripe
use Stripe\Stripe;
use Stripe\Checkout\Session;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validamos los datos que metió Axel Gabriel en el formulario
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        // 2. Creamos el usuario en la base de datos (payment_status será 'pending' por defecto)
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // 3. Autenticamos tu aplicación con Stripe usando la llave secreta del .env
        Stripe::setApiKey(env('STRIPE_SECRET'));

        // 4. Le pedimos a Stripe que nos genere la pasarela de pago personalizada
        $checkoutSession = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'mxn',
                    'product_data' => [
                        'name' => 'Inscripción - 4ª Carrera Corporación Azul',
                        'description' => 'Acceso de atleta para el Circuito Toluca 2026',
                    ],
                    'unit_amount' => 35000, // $350.00 MXN ($350 * 100 centavos)
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            
            // 🌟 METADATA: Guardamos el ID del usuario en Stripe para saber quién pagó después
            'metadata' => [
                'user_id' => $user->id,
            ],
            
            // ¿A dónde lo mandamos si el pago es exitoso o si cancela?
            'success_url' => url('/payment-success?session_id={CHECKOUT_SESSION_ID}'),
            'cancel_url' => url('/register'),
        ]);

        // 5. ¡REDIRECCIÓN! Mandamos al corredor directo a la pantalla segura de Stripe
        return redirect($checkoutSession->url);
    }
}
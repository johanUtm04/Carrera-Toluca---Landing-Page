<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\Hash;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        //Count the users that paid
        $paidRunnersCount = User::where('payment_status', 'paid')->count();
        if ($paidRunnersCount >= 800) {
            //Tp show Sold Out page
            return redirect()->route('race.soldout');
        }

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Create Stripe Checkout Session
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $checkoutSession = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'mxn',
                    'product_data' => [
                        'name' => 'Inscripción - 4ª Carrera Corporación Azul',
                        'description' => 'Acceso de atleta para el Circuito Toluca 2026',
                    ],
                    'unit_amount' => 35000, // $350.00 MXN (Stripe counts in cents)
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'metadata' => [
                'user_id' => $user->id,
            ],
            'success_url' => url('/payment-success?session_id={CHECKOUT_SESSION_ID}'),
            'cancel_url' => url('/register'),
        ]);

        //Save de Session ID in the user record
        $user->update([
            'stripe_session_id' => $checkoutSession->id
        ]);

        return redirect($checkoutSession->url);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Log;

class StripeWebhookController extends Controller
{
    public function handleWebhook(Request $request)
    {
        // Get the data packet sent by Stripe
        $payload = $request->all();

        // Check if this is the exact event we care about
        if (isset($payload['type']) && $payload['type'] === 'checkout.session.completed') {
            
            $session = $payload['data']['object'];

            // Find the user in our database with the matching Stripe session ID
            $user = User::where('stripe_session_id', $session['id'])->first();

            if ($user) {
                $user->update(['payment_status' => 'paid']);
                //Paint the evidence in the logs
                Log::info("Runner updated successfully: User ID {$user->id} has paid.");
            } else {
                // If no user is found, log a warning (this shouldn't happen if everything is set up correctly)
                Log::warning("Stripe session found, but no matching user in database. Somthings is wrong. Session ID: {$session['id']}");
            }
        }

        // We are acknowledging receipt of the event
        return response()->json(['status' => 'success'], 200);
    }
}
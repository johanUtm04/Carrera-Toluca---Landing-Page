<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $runner = DB::table('runners')->where('user_id', $user->id)->first();
        
        $registration = null;
        $race = null;

        if ($runner) {
            $registration = DB::table('registrations')->where('runner_id', $runner->id)->first();
            if ($registration) {
                $race = DB::table('races')->where('id', $registration->race_id)->first();
            }
        }

        if ($registration) {
            return view('race.dashboard', [
                'user' => $user,
                'runner' => $runner,
                'registration' => $registration,
                'race' => $race
            ]);
        }

        //If NOT registered, fetch available races so they can apply
        $availableRaces = DB::table('races')->get();

        return view('race.apply', [
            'user' => $user,
            'races' => $availableRaces
        ]);
    }
}
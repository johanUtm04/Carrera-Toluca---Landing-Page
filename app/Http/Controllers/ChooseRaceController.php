<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChooseRaceController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();

        // 1. Check if this runner already has an active registration row
        $runner = DB::table('runners')->where('user_id', $user->id)->first();
        
        $registration = null;
        $race = null;

        if ($runner) {
            $registration = DB::table('registrations')->where('runner_id', $runner->id)->first();
            if ($registration) {
                $race = DB::table('races')->where('id', $registration->race_id)->first();
            }
        }

        // 2. If already registered, show their data profile dashboard
        if ($registration) {
            return view('race.dashboard', compact('user', 'runner', 'registration', 'race'));
        }

        // 3. If NOT registered, fetch available races so they can apply
        $availableRaces = DB::table('races')->get();

        return view('race.dashboard', [
            'user' => $user,
            'races' => $availableRaces
        ]);
    }
}

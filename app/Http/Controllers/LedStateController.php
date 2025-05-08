<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LedState;

class LedStateController extends Controller
{
    //
    public function show()
    {
        $state = LedState::first();
        return response()->json(['is_on' => $state->is_on]);
    }

    public function toggle()
    {
        $state = LedState::first();
        $state->is_on = !$state->is_on;
        $state->save();

        return redirect('/led-control')->with('status', 'LED turned ' . ($state->is_on ? 'ON' : 'OFF'));
    }
}

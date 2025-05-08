<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LedStateController;

Route::get('/led-control', function () {
    $state = \App\Models\LedState::first();
    return view('led-control', ['state' => $state->is_on]);
});

Route::post('/toggle-led', [LedStateController::class, 'toggle']);

Route::get('/', function () {
    return view('welcome');
});

<?php

use App\Http\Controllers\RegisterLeadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/register', RegisterLeadController::class);

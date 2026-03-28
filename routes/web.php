<?php

use App\Http\Controllers\RegisterLeadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home-2', function () {
    return view('home-2');
});

Route::post('/register', RegisterLeadController::class);

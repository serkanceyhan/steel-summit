<?php

use App\Http\Controllers\LeadPaymentWebhookController;
use App\Http\Controllers\RegisterLeadController;
use App\Http\Controllers\SponsorshipLeadController;
use App\Http\Controllers\StorePartialLeadController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home-2');
});

Route::redirect('/home-2', '/');

Route::get('/register', function () {
    return view('register');
})->name('register.page');

Route::post('/register', RegisterLeadController::class);
Route::post('/register/partial', StorePartialLeadController::class);
Route::post('/sponsorship-inquiry', SponsorshipLeadController::class);
Route::post('/webhooks/payment/lead', LeadPaymentWebhookController::class)
    ->withoutMiddleware([VerifyCsrfToken::class]);

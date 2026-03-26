<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLeadRequest;
use App\Models\Lead;
use Illuminate\Http\RedirectResponse;

class RegisterLeadController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreLeadRequest $request): RedirectResponse
    {
        $phoneCountryCode = $request->string('phone_country_code')->toString();
        $phoneNumber = preg_replace('/\s+/', '', $request->string('phone')->toString()) ?? '';
        $consentApproved = $request->boolean('consent_approved');

        Lead::create([
            'full_name' => $request->string('full_name')->toString(),
            'email' => $request->string('email')->toString(),
            'company_name' => $request->string('company_name')->toString(),
            'phone' => $phoneCountryCode.$phoneNumber,
            'gdpr_approved' => $consentApproved,
            'kvkk_approved' => $consentApproved,
            'privacy_approved' => $consentApproved,
        ]);

        return back()->with('status', 'Registration request received. Our hospitality team will contact you shortly.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSponsorshipLeadRequest;
use App\Models\Lead;
use Illuminate\Http\RedirectResponse;

class SponsorshipLeadController extends Controller
{
    public function __invoke(StoreSponsorshipLeadRequest $request): RedirectResponse
    {
        $phoneCountryCode = $request->string('phone_country_code')->toString();
        $phoneNumber = preg_replace('/\s+/', '', $request->string('phone')->toString()) ?? '';
        $consentApproved = $request->boolean('consent_approved');

        Lead::create([
            'lead_type' => 'sponsorship',
            'status' => Lead::STATUS_SUBMITTED,
            'full_name' => trim($request->string('first_name')->toString().' '.$request->string('last_name')->toString()),
            'email' => $request->string('email')->toString(),
            'company_name' => $request->string('company_name')->toString(),
            'country' => $request->string('country')->toString(),
            'phone' => $phoneCountryCode.$phoneNumber,
            'gdpr_approved' => $consentApproved,
            'kvkk_approved' => $consentApproved,
            'privacy_approved' => $consentApproved,
        ]);

        return back()->with('sponsorship_status', 'Your sponsorship inquiry has been received. Our team will contact you shortly.');
    }
}

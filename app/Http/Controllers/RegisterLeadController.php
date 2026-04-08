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

        Lead::updateOrCreate(
            [
                'email' => $request->string('email')->toString(),
                'lead_type' => 'registration',
            ],
            [
                'full_name' => trim($request->string('first_name')->toString().' '.$request->string('last_name')->toString()),
                'company_name' => $request->string('company_name')->toString(),
                'country' => $request->string('country')->toString(),
                'company_field_id' => $request->integer('company_field_id'),
                'person_role_id' => $request->integer('person_role_id'),
                'registration_package' => $request->string('registration_package')->toString(),
                'billing_type' => $request->string('billing_type')->toString(),
                'billing_name' => $request->string('billing_name')->toString(),
                'billing_tax_number' => $request->string('billing_tax_number')->toString(),
                'billing_tax_office' => $request->string('billing_tax_office')->toString(),
                'billing_address' => $request->string('billing_address')->toString(),
                'phone' => $phoneCountryCode.$phoneNumber,
                'gdpr_approved' => $consentApproved,
                'kvkk_approved' => $consentApproved,
                'privacy_approved' => $consentApproved,
            ]
        );

        return back()->with('status', 'Registration request received. Our hospitality team will contact you shortly.');
    }
}

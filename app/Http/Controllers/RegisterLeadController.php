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
        Lead::create([
            'full_name' => $request->string('full_name')->toString(),
            'email' => $request->string('email')->toString(),
            'company_name' => $request->string('company_name')->toString(),
            'gdpr_approved' => $request->boolean('gdpr_approved'),
            'kvkk_approved' => $request->boolean('kvkk_approved'),
        ]);

        return back()->with('status', 'Registration request received. Our hospitality team will contact you shortly.');
    }
}

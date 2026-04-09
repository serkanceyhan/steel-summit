<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StorePartialLeadController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            'country' => ['nullable', 'string', 'max:255'],
            'phone_country_code' => ['nullable', 'string', 'max:10'],
            'phone' => ['nullable', 'string', 'max:20'],
        ]);

        $lead = Lead::firstOrNew([
            'email' => $data['email'],
            'lead_type' => 'registration',
        ]);

        $lead->fill([
            'full_name' => trim($data['first_name'].' '.$data['last_name']),
            'company_name' => $data['company_name'],
            'country' => $data['country'] ?? null,
            'phone' => $data['phone_country_code'] && $data['phone']
                ? $data['phone_country_code'].$data['phone']
                : null,
        ]);

        if (! $lead->exists) {
            $lead->status = Lead::STATUS_DRAFT;
            $lead->gdpr_approved = false;
            $lead->kvkk_approved = false;
            $lead->privacy_approved = false;
        }

        $lead->save();

        return response()->json(['ok' => true]);
    }
}

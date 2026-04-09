<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Services\LeadRegistrationConversionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LeadPaymentWebhookController extends Controller
{
    public function __invoke(Request $request, LeadRegistrationConversionService $conversionService): JsonResponse
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'lead_type' => ['nullable', Rule::in(['registration'])],
            'payment_status' => ['required', Rule::in(['approved', 'failed', 'pending'])],
            'payment_reference' => ['nullable', 'string', 'max:255'],
            'amount_paid' => ['nullable', 'numeric', 'min:0'],
            'currency' => ['nullable', 'string', 'size:3'],
        ]);

        $lead = Lead::query()
            ->where('email', $data['email'])
            ->where('lead_type', $data['lead_type'] ?? 'registration')
            ->first();

        if (! $lead) {
            return response()->json([
                'ok' => false,
                'message' => 'Lead not found.',
            ], 404);
        }

        if ($data['payment_status'] === 'approved') {
            $attendee = $conversionService->convertLeadToAttendee(
                $lead,
                $data['payment_reference'] ?? null,
                isset($data['amount_paid']) ? (float) $data['amount_paid'] : null,
                $data['currency'] ?? null,
            );

            return response()->json([
                'ok' => true,
                'status' => $lead->status,
                'attendee_id' => $attendee->id,
            ]);
        }

        if ($data['payment_status'] === 'failed') {
            $conversionService->markPaymentFailed($lead, $data['payment_reference'] ?? null);

            return response()->json([
                'ok' => true,
                'status' => $lead->status,
            ]);
        }

        $lead->forceFill([
            'status' => Lead::STATUS_PAYMENT_PENDING,
            'payment_reference' => $data['payment_reference'] ?? null,
        ])->save();

        return response()->json([
            'ok' => true,
            'status' => $lead->status,
        ]);
    }
}

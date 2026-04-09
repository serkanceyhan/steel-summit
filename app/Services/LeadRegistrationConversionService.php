<?php

namespace App\Services;

use App\Models\Attendee;
use App\Models\Lead;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class LeadRegistrationConversionService
{
    public function convertLeadToAttendee(Lead $lead, ?string $paymentReference = null, ?float $amountPaid = null, ?string $currency = null): Attendee
    {
        return DB::transaction(function () use ($lead, $paymentReference, $amountPaid, $currency): Attendee {
            [$firstName, $lastName] = $this->splitName($lead->full_name);

            $attendee = Attendee::query()->updateOrCreate(
                ['email' => $lead->email],
                [
                    'first_name' => $firstName,
                    'last_name' => $lastName,
                    'company' => $lead->company_name,
                    'payment_status' => 'approved',
                    'amount_paid' => $amountPaid ?? 0,
                    'currency' => strtoupper($currency ?? 'EUR'),
                ]
            );

            $lead->forceFill([
                'status' => Lead::STATUS_CONVERTED,
                'payment_reference' => $paymentReference,
                'converted_at' => Carbon::now(),
            ])->save();

            return $attendee;
        });
    }

    public function markPaymentFailed(Lead $lead, ?string $paymentReference = null): Lead
    {
        $lead->forceFill([
            'status' => Lead::STATUS_PAYMENT_FAILED,
            'payment_reference' => $paymentReference,
        ])->save();

        return $lead;
    }

    /**
     * @return array{0:string,1:string}
     */
    private function splitName(string $fullName): array
    {
        $parts = preg_split('/\s+/', trim($fullName)) ?: [];
        $firstName = $parts[0] ?? 'Guest';
        $lastName = count($parts) > 1 ? implode(' ', array_slice($parts, 1)) : 'Attendee';

        return [$firstName, $lastName];
    }
}

<?php

use App\Models\Attendee;
use App\Models\Lead;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('converts registration lead to attendee on approved payment webhook', function () {
    Lead::create([
        'lead_type' => 'registration',
        'status' => Lead::STATUS_PAYMENT_PENDING,
        'full_name' => 'James Park',
        'email' => 'james@cleveland.com',
        'company_name' => 'Cleveland-Cliffs',
        'gdpr_approved' => true,
        'kvkk_approved' => true,
        'privacy_approved' => true,
    ]);

    $response = $this->postJson('/webhooks/payment/lead', [
        'email' => 'james@cleveland.com',
        'payment_status' => 'approved',
        'payment_reference' => 'PAY-001',
        'amount_paid' => 1050,
        'currency' => 'EUR',
    ]);

    $response->assertOk();

    $lead = Lead::query()->where('email', 'james@cleveland.com')->first();
    $attendee = Attendee::query()->where('email', 'james@cleveland.com')->first();

    expect($lead)->not->toBeNull()
        ->and($lead->status)->toBe(Lead::STATUS_CONVERTED)
        ->and($lead->payment_reference)->toBe('PAY-001')
        ->and($lead->converted_at)->not->toBeNull();

    expect($attendee)->not->toBeNull()
        ->and($attendee->payment_status)->toBe('approved')
        ->and((float) $attendee->amount_paid)->toBe(1050.0)
        ->and($attendee->currency)->toBe('EUR');
});

it('marks lead as payment failed on failed payment webhook', function () {
    Lead::create([
        'lead_type' => 'registration',
        'status' => Lead::STATUS_PAYMENT_PENDING,
        'full_name' => 'No Pay',
        'email' => 'nopay@cleveland.com',
        'company_name' => 'Cleveland-Cliffs',
        'gdpr_approved' => true,
        'kvkk_approved' => true,
        'privacy_approved' => true,
    ]);

    $response = $this->postJson('/webhooks/payment/lead', [
        'email' => 'nopay@cleveland.com',
        'payment_status' => 'failed',
        'payment_reference' => 'PAY-FAIL-001',
    ]);

    $response->assertOk();

    $lead = Lead::query()->where('email', 'nopay@cleveland.com')->first();

    expect($lead)->not->toBeNull()
        ->and($lead->status)->toBe(Lead::STATUS_PAYMENT_FAILED)
        ->and($lead->payment_reference)->toBe('PAY-FAIL-001');

    expect(Attendee::query()->where('email', 'nopay@cleveland.com')->exists())->toBeFalse();
});

it('is idempotent when approved webhook is sent multiple times', function () {
    Lead::create([
        'lead_type' => 'registration',
        'status' => Lead::STATUS_PAYMENT_PENDING,
        'full_name' => 'Repeat User',
        'email' => 'repeat@cleveland.com',
        'company_name' => 'Cleveland-Cliffs',
        'gdpr_approved' => true,
        'kvkk_approved' => true,
        'privacy_approved' => true,
    ]);

    $payload = [
        'email' => 'repeat@cleveland.com',
        'payment_status' => 'approved',
        'payment_reference' => 'PAY-REPEAT-001',
        'amount_paid' => 950,
        'currency' => 'EUR',
    ];

    $this->postJson('/webhooks/payment/lead', $payload)->assertOk();
    $this->postJson('/webhooks/payment/lead', $payload)->assertOk();

    expect(Attendee::query()->where('email', 'repeat@cleveland.com')->count())->toBe(1);
});

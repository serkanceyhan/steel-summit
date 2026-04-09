<?php

use App\Models\Lead;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

function validRegistrationPayload(array $overrides = []): array
{
    return array_merge([
        'first_name' => 'James',
        'last_name' => 'Park',
        'email' => 'james@cleveland.com',
        'company_name' => 'Cleveland-Cliffs',
        'country' => 'Turkey',
        'company_field_id' => '1',
        'person_role_id' => '1',
        'registration_package' => 'standard',
        'billing_type' => 'corporate',
        'billing_name' => 'Cleveland-Cliffs',
        'billing_tax_number' => '1234567890',
        'billing_tax_office' => 'Istanbul',
        'billing_address' => 'Levent, Istanbul',
        'phone_country_code' => '+90',
        'phone' => '5551234567',
        'consent_approved' => '1',
    ], $overrides);
}

it('stores a valid lead submission', function () {
    $response = $this->post('/register', validRegistrationPayload());

    $response->assertRedirect();
    $response->assertSessionHas('status');

    $lead = Lead::query()->where('email', 'james@cleveland.com')->first();

    expect($lead)->not->toBeNull()
        ->and($lead->full_name)->toBe('James Park')
        ->and($lead->lead_type)->toBe('registration')
        ->and($lead->status)->toBe(Lead::STATUS_PAYMENT_PENDING)
        ->and($lead->phone)->toBe('+905551234567')
        ->and($lead->gdpr_approved)->toBeTrue()
        ->and($lead->kvkk_approved)->toBeTrue()
        ->and($lead->privacy_approved)->toBeTrue();
});

it('rejects duplicate email submission', function () {
    Lead::create([
        'lead_type' => 'registration',
        'status' => Lead::STATUS_PAYMENT_PENDING,
        'full_name' => 'James Park',
        'email' => 'james@cleveland.com',
        'company_name' => 'Cleveland-Cliffs',
        'phone' => '+905551234567',
        'gdpr_approved' => true,
        'kvkk_approved' => true,
        'privacy_approved' => true,
    ]);

    $response = $this->post('/register', validRegistrationPayload([
        'first_name' => 'James Again',
    ]));

    $response->assertSessionHasErrors('email');
    expect(Lead::count())->toBe(1);
});

it('rejects submission without consent approval', function () {
    $response = $this->post('/register', validRegistrationPayload([
        'email' => 'noconsent@ssab.com',
        'consent_approved' => '0',
    ]));

    $response->assertSessionHasErrors('consent_approved');
    expect(Lead::count())->toBe(0);
});

it('rejects submission without selected country', function () {
    $response = $this->post('/register', validRegistrationPayload([
        'email' => 'nocountry@ssab.com',
        'country' => '',
    ]));

    $response->assertSessionHasErrors('country');
    expect(Lead::count())->toBe(0);
});

it('rejects missing phone number', function () {
    $response = $this->post('/register', validRegistrationPayload([
        'email' => 'nophone@ssab.com',
        'phone' => '',
    ]));

    $response->assertSessionHasErrors('phone');
    expect(Lead::count())->toBe(0);
});

it('rejects non-numeric phone number', function () {
    $response = $this->post('/register', validRegistrationPayload([
        'email' => 'invalidphone@ssab.com',
        'phone_country_code' => '+44',
        'phone' => '555ABC123',
    ]));

    $response->assertSessionHasErrors('phone');
    expect(Lead::count())->toBe(0);
});

it('rejects invalid email format', function () {
    $response = $this->post('/register', validRegistrationPayload([
        'email' => 'not-an-email',
    ]));

    $response->assertSessionHasErrors('email');
});

it('rejects missing first name', function () {
    $response = $this->post('/register', validRegistrationPayload([
        'email' => 'valid@smsgroup.com',
        'first_name' => '',
    ]));

    $response->assertSessionHasErrors('first_name');
});

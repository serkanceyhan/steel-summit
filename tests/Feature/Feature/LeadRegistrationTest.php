<?php

use App\Models\Lead;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('stores a valid lead submission', function () {
    $response = $this->post('/register', [
        'full_name' => 'James Park',
        'email' => 'james@cleveland.com',
        'company_name' => 'Cleveland-Cliffs',
        'phone_country_code' => '+90',
        'phone' => '5551234567',
        'gdpr_approved' => true,
        'kvkk_approved' => true,
        'privacy_approved' => true,
    ]);

    $response->assertRedirect();

    expect(Lead::where('email', 'james@cleveland.com')->exists())->toBeTrue();
});

it('rejects duplicate email submission', function () {
    Lead::create([
        'full_name' => 'James Park',
        'email' => 'james@cleveland.com',
        'company_name' => 'Cleveland-Cliffs',
        'phone' => '+905551234567',
        'gdpr_approved' => true,
        'kvkk_approved' => true,
        'privacy_approved' => true,
    ]);

    $response = $this->post('/register', [
        'full_name' => 'James Park Again',
        'email' => 'james@cleveland.com',
        'company_name' => 'Cleveland-Cliffs',
        'phone_country_code' => '+90',
        'phone' => '5551234568',
        'gdpr_approved' => true,
        'kvkk_approved' => true,
        'privacy_approved' => true,
    ]);

    $response->assertSessionHasErrors('email');
    expect(Lead::count())->toBe(1);
});

it('rejects submission without gdpr consent', function () {
    $response = $this->post('/register', [
        'full_name' => 'No Consent',
        'email' => 'noconsent@ssab.com',
        'company_name' => 'SSAB',
        'phone_country_code' => '+90',
        'phone' => '5551234500',
        'gdpr_approved' => false,
        'kvkk_approved' => true,
        'privacy_approved' => true,
    ]);

    $response->assertSessionHasErrors('gdpr_approved');
    expect(Lead::count())->toBe(0);
});

it('rejects submission without kvkk consent', function () {
    $response = $this->post('/register', [
        'full_name' => 'No KVKK',
        'email' => 'nokvkk@ssab.com',
        'company_name' => 'SSAB',
        'phone_country_code' => '+90',
        'phone' => '5551234501',
        'gdpr_approved' => true,
        'kvkk_approved' => false,
        'privacy_approved' => true,
    ]);

    $response->assertSessionHasErrors('kvkk_approved');
    expect(Lead::count())->toBe(0);
});

it('rejects submission without privacy consent', function () {
    $response = $this->post('/register', [
        'full_name' => 'No Privacy Consent',
        'email' => 'noprivacy@ssab.com',
        'company_name' => 'SSAB',
        'phone_country_code' => '+90',
        'phone' => '5551234504',
        'gdpr_approved' => true,
        'kvkk_approved' => true,
        'privacy_approved' => false,
    ]);

    $response->assertSessionHasErrors('privacy_approved');
    expect(Lead::count())->toBe(0);
});

it('rejects missing phone number', function () {
    $response = $this->post('/register', [
        'full_name' => 'No Phone',
        'email' => 'nophone@ssab.com',
        'company_name' => 'SSAB',
        'phone_country_code' => '+90',
        'gdpr_approved' => true,
        'kvkk_approved' => true,
        'privacy_approved' => true,
    ]);

    $response->assertSessionHasErrors('phone');
    expect(Lead::count())->toBe(0);
});

it('rejects non-numeric phone number', function () {
    $response = $this->post('/register', [
        'full_name' => 'Invalid Phone',
        'email' => 'invalidphone@ssab.com',
        'company_name' => 'SSAB',
        'phone_country_code' => '+44',
        'phone' => '555ABC123',
        'gdpr_approved' => true,
        'kvkk_approved' => true,
        'privacy_approved' => true,
    ]);

    $response->assertSessionHasErrors('phone');
    expect(Lead::count())->toBe(0);
});

it('rejects invalid email format', function () {
    $response = $this->post('/register', [
        'full_name' => 'Bad Email',
        'email' => 'not-an-email',
        'company_name' => 'SMS Group',
        'phone_country_code' => '+90',
        'phone' => '5551234502',
        'gdpr_approved' => true,
        'kvkk_approved' => true,
        'privacy_approved' => true,
    ]);

    $response->assertSessionHasErrors('email');
});

it('rejects missing full name', function () {
    $response = $this->post('/register', [
        'email' => 'valid@smsgroup.com',
        'company_name' => 'SMS Group',
        'phone_country_code' => '+90',
        'phone' => '5551234503',
        'gdpr_approved' => true,
        'kvkk_approved' => true,
        'privacy_approved' => true,
    ]);

    $response->assertSessionHasErrors('full_name');
});

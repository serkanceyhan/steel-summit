<?php

use App\Models\Lead;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('stores a valid lead submission', function () {
    $response = $this->post('/register', [
        'full_name'     => 'James Park',
        'email'         => 'james@cleveland.com',
        'company_name'  => 'Cleveland-Cliffs',
        'title'         => 'VP Procurement',
        'country'       => 'USA',
        'gdpr_approved' => true,
        'kvkk_approved' => true,
    ]);

    $response->assertRedirect();

    expect(Lead::where('email', 'james@cleveland.com')->exists())->toBeTrue();
});

it('rejects duplicate email submission', function () {
    Lead::create([
        'full_name' => 'James Park',
        'email' => 'james@cleveland.com',
        'company_name' => 'Cleveland-Cliffs',
        'gdpr_approved' => true,
        'kvkk_approved' => true,
    ]);

    $response = $this->post('/register', [
        'full_name' => 'James Park Again',
        'email' => 'james@cleveland.com',
        'company_name' => 'Cleveland-Cliffs',
        'gdpr_approved' => true,
        'kvkk_approved' => true,
    ]);

    $response->assertSessionHasErrors('email');
    expect(Lead::count())->toBe(1);
});

it('rejects submission without gdpr consent', function () {
    $response = $this->post('/register', [
        'full_name' => 'No Consent',
        'email' => 'noconsent@ssab.com',
        'company_name' => 'SSAB',
        'gdpr_approved' => false,
        'kvkk_approved' => true,
    ]);

    $response->assertSessionHasErrors('gdpr_approved');
    expect(Lead::count())->toBe(0);
});

it('rejects submission without kvkk consent', function () {
    $response = $this->post('/register', [
        'full_name' => 'No KVKK',
        'email' => 'nokvkk@ssab.com',
        'company_name' => 'SSAB',
        'gdpr_approved' => true,
        'kvkk_approved' => false,
    ]);

    $response->assertSessionHasErrors('kvkk_approved');
    expect(Lead::count())->toBe(0);
});

it('rejects invalid email format', function () {
    $response = $this->post('/register', [
        'full_name' => 'Bad Email',
        'email' => 'not-an-email',
        'company_name' => 'SMS Group',
        'gdpr_approved' => true,
        'kvkk_approved' => true,
    ]);

    $response->assertSessionHasErrors('email');
});

it('rejects missing full name', function () {
    $response = $this->post('/register', [
        'email' => 'valid@smsgroup.com',
        'company_name' => 'SMS Group',
        'gdpr_approved' => true,
        'kvkk_approved' => true,
    ]);

    $response->assertSessionHasErrors('full_name');
});
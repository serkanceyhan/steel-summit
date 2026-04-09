<?php

use App\Models\Lead;
use Illuminate\Database\QueryException;

it('creates a lead with required fields', function () {
    $lead = Lead::create([
        'full_name' => 'John Smith',
        'email' => 'john@posco.com',
        'company_name' => 'POSCO',
        'gdpr_approved' => true,
        'kvkk_approved' => true,
    ]);

    expect($lead)->toBeInstanceOf(Lead::class)
        ->and($lead->full_name)->toBe('John Smith')
        ->and($lead->email)->toBe('john@posco.com')
        ->and($lead->gdpr_approved)->toBeTrue()
        ->and($lead->kvkk_approved)->toBeTrue();
});

it('casts boolean fields correctly', function () {
    $lead = Lead::create([
        'full_name' => 'Jane Doe',
        'email' => 'jane@tatasteel.com',
        'company_name' => 'TATA Steel',
        'gdpr_approved' => false,
        'kvkk_approved' => false,
    ]);

    expect($lead->gdpr_approved)->toBeFalse()
        ->and($lead->kvkk_approved)->toBeFalse();
});

it('does not allow duplicate emails', function () {
    Lead::create([
        'lead_type' => 'registration',
        'full_name' => 'First User',
        'email' => 'duplicate@arcelor.com',
        'company_name' => 'ArcelorMittal',
    ]);

    expect(fn () => Lead::create([
        'lead_type' => 'registration',
        'full_name' => 'Second User',
        'email' => 'duplicate@arcelor.com',
        'company_name' => 'ArcelorMittal',
    ]))->toThrow(QueryException::class);
});

it('allows same email for different lead types', function () {
    Lead::create([
        'lead_type' => 'registration',
        'full_name' => 'Registration User',
        'email' => 'shared@arcelor.com',
        'company_name' => 'ArcelorMittal',
    ]);

    Lead::create([
        'lead_type' => 'sponsorship',
        'full_name' => 'Sponsorship User',
        'email' => 'shared@arcelor.com',
        'company_name' => 'ArcelorMittal',
    ]);

    expect(Lead::query()->where('email', 'shared@arcelor.com')->count())->toBe(2);
});

it('defaults consent flags to false', function () {
    $lead = Lead::create([
        'full_name' => 'Marketing Lead',
        'email' => 'marketing@nippon.com',
        'company_name' => 'Nippon Steel',
    ])->fresh();

    expect($lead->gdpr_approved)->toBeFalse()
        ->and($lead->kvkk_approved)->toBeFalse();
});

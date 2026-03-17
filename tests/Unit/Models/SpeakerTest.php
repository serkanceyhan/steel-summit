<?php

use App\Models\Company;
use App\Models\Session;
use App\Models\Speaker;

it('belongs to a company', function () {
    $company = Company::factory()->create();
    $speaker = Speaker::factory()->for($company)->create();

    expect($speaker->company)->toBeInstanceOf(Company::class)
        ->and($speaker->company->is($company))->toBeTrue();
});

it('can be attached to sessions', function () {
    $speaker = Speaker::factory()->create();
    $session = Session::factory()->create();

    $speaker->sessions()->attach($session->id);

    expect($speaker->sessions->modelKeys())->toContain($session->id)
        ->and($session->fresh()->speakers->modelKeys())->toContain($speaker->id);
});

it('allows nullable profile fields', function () {
    $speaker = Speaker::factory()->create([
        'bio' => null,
        'image_path' => null,
        'linkedin_url' => null,
    ]);

    expect($speaker->bio)->toBeNull()
        ->and($speaker->image_path)->toBeNull()
        ->and($speaker->linkedin_url)->toBeNull();
});

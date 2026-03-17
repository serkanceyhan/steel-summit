<?php

use App\Models\Attendee;
use Illuminate\Support\Str;

it('auto generates uuid ticket_id on creation', function () {
    $attendee = Attendee::create([
        'first_name'     => 'Ali',
        'last_name'      => 'Yılmaz',
        'email'          => 'ali@tosyali.com',
        'company'        => 'Tosyalı Holding',
        'payment_status' => 'pending',
        'currency'       => 'USD',
    ]);

    expect($attendee->ticket_id)->not->toBeNull()
        ->and(Str::isUuid($attendee->ticket_id))->toBeTrue();
});

it('two attendees get different ticket ids', function () {
    $a1 = Attendee::create([
        'first_name' => 'Ali',   'last_name' => 'Yılmaz',
        'email' => 'ali@tosyali.com', 'company' => 'Tosyalı',
    ]);
    $a2 = Attendee::create([
        'first_name' => 'Veli',  'last_name' => 'Demir',
        'email' => 'veli@hadeed.com', 'company' => 'Hadeed',
    ]);

    expect($a1->ticket_id)->not->toBe($a2->ticket_id);
});

it('returns full name via accessor', function () {
    $attendee = Attendee::create([
        'first_name' => 'Park',
        'last_name'  => 'Jun-ho',
        'email'      => 'park@posco.com',
        'company'    => 'POSCO',
    ]);

    expect($attendee->full_name)->toBe('Park Jun-ho');
});

it('isPaid returns true only for approved status', function () {
    $pending  = Attendee::create(['first_name' => 'A', 'last_name' => 'B', 'email' => 'a@b.com',  'company' => 'X', 'payment_status' => 'pending']);
    $approved = Attendee::create(['first_name' => 'C', 'last_name' => 'D', 'email' => 'c@d.com',  'company' => 'Y', 'payment_status' => 'approved']);
    $failed   = Attendee::create(['first_name' => 'E', 'last_name' => 'F', 'email' => 'e@f.com',  'company' => 'Z', 'payment_status' => 'failed']);

    expect($pending->isPaid())->toBeFalse()
        ->and($approved->isPaid())->toBeTrue()
        ->and($failed->isPaid())->toBeFalse();
});

it('has default currency of USD', function () {
    $attendee = Attendee::create([
        'first_name' => 'Test', 'last_name' => 'User',
        'email' => 'test@nucor.com', 'company' => 'Nucor',
    ]);

    expect($attendee->currency)->toBe('USD');
});
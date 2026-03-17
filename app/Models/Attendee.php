<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Attendee extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function (self $attendee): void {
            if (empty($attendee->ticket_id)) {
                $attendee->ticket_id = (string) Str::uuid();
            }

            if (empty($attendee->currency)) {
                $attendee->currency = 'USD';
            }

            if (empty($attendee->title)) {
                $attendee->title = 'Attendee';
            }
        });
    }

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn (): string => trim("{$this->first_name} {$this->last_name}"),
        );
    }

    public function isPaid(): bool
    {
        return $this->payment_status === 'approved';
    }

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'amount_paid' => 'decimal:2',
        ];
    }
}

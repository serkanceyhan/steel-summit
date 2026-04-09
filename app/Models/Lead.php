<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    public const STATUS_DRAFT = 'draft';

    public const STATUS_SUBMITTED = 'submitted';

    public const STATUS_PAYMENT_PENDING = 'payment_pending';

    public const STATUS_PAYMENT_FAILED = 'payment_failed';

    public const STATUS_CONVERTED = 'converted';

    protected $guarded = [];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'gdpr_approved' => 'boolean',
            'kvkk_approved' => 'boolean',
            'privacy_approved' => 'boolean',
            'converted_at' => 'datetime',
        ];
    }
}

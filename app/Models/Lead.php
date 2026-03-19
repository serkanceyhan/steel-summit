<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

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
        ];
    }
}

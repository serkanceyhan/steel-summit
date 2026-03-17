<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function sessions(): BelongsToMany
    {
        return $this->belongsToMany(Session::class, 'company_session');
    }

    public function speakers(): HasMany
    {
        return $this->hasMany(Speaker::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
    use HasFactory;

    public $timestamp = false;

    public function gender(): BelongsTo
    {
        return $this->belongsTo(Gender::class, 'genders');
    }
}

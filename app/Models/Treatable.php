<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Treatable extends Model
{
    use HasFactory;

    public function treatables(): MorphTo
    {
        return $this->morphTo();
    }

    public function Pathos(): BelongsTo
    {
        return $this->belongsTo(Patho::class);
    }

    public function therapys(): MorphToMany
    {
        return $this->morphToMany(Client::class, 'therapys');
    }
}

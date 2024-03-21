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

    public $timestamps = false;


    public function treatables(): MorphTo
    {
        return $this->morphTo();
    }

    public function therapys(): MorphToMany
    {
        return $this->morphToMany(Client::class, 'therapys');
    }

    // Récupérer foreign id PATHO
    public function patho(): BelongsTo
    {
        return $this->belongsTo(Patho::class);
    }
}

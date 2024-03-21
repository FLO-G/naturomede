<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Curable extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function curables(): MorphTo
    {
        return $this->morphTo();
    }

    public function therapys(): MorphToMany
    {
        return $this->morphToMany(Client::class, 'therapys');
    }

    public function symptom(): BelongsTo
    {
        return $this->belongsTo(Symptom::class);
    }
}

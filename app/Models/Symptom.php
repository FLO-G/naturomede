<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Symptom extends Model
{
    use HasFactory;

    public $timestamps = false;

    // public function pathos(): BelongsToMany
    // {
    //     return $this->belongsToMany(Patho::class, 'patho_symptoms');
    // }

    // public function systems(): BelongsToMany
    // {
    //     return $this->belongsToMany(System::class, 'symptom_systems');
    // }

    public function problems(): MorphToMany
    {
        return $this->morphToMany(Client::class, 'problems');
    }
}

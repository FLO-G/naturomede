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

    public function pathos(): BelongsToMany
    {
        return $this->belongsToMany(Patho::class, 'patho_symptoms');
    }

    public function systems(): BelongsToMany
    {
        return $this->belongsToMany(System::class, 'symptom_systems');
    }

    public function problems(): MorphToMany
    {
        return $this->morphToMany(Client::class, 'problems');
    }

    public function herbals()
    {
        return $this->morphedByMany(Herbal::class, 'curable', 'curables');
    }

    public function nutris()
    {
        return $this->morphedByMany(Nutri::class, 'curable', 'curables');
    }

    public function measures()
    {
        return $this->morphedByMany(Measure::class, 'curable', 'curables');
    }

    public function aromas()
    {
        return $this->morphedByMany(Aroma::class, 'curable', 'curables');
    }
}

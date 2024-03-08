<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Patho extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function systems(): BelongsToMany
    {
        return $this->belongsToMany(System::class, 'patho_systems');
    }

    public function symptoms(): BelongsToMany
    {
        return $this->belongsToMany(Symptom::class, 'patho_symptoms');
    }
  
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Aroma extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name'];

    public function treatables(): MorphToMany
    {
        return $this->morphToMany(Patho::class, 'treatable');
    }

   public function curables(): MorphToMany
    {
        return $this->morphToMany(Symptom::class, 'curable');
    }

    public function families(): BelongsToMany
    {
        return $this->belongsToMany(Family::class, 'aroma_families');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Herbal extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function treatables(): MorphToMany
    {
        return $this->morphToMany(Patho::class, 'treatable');
    }

   public function curables(): MorphToMany
    {
        return $this->morphToMany(Symptom::class, 'curable');
    }

    
}

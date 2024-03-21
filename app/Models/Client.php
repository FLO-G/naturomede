<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function treatables()
    {
        return $this->morphedByMany(Treatable::class, 'therapy', 'therapys');
    }


    public function curables()
    {
        return $this->morphedByMany(Treatable::class, 'therapy', 'therapys');
    }
  

    public function pathos()
    {
        return $this->morphedByMany(Patho::class, 'problem', 'problems');
    }


    public function symptoms()
    {
        return $this->morphedByMany(Symptom::class, 'problem', 'problems');
    }

    
    public function gender(): BelongsTo
    {
        return $this->belongsTo(Gender::class);
    }
}

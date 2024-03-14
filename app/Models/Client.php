<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function pathos()
    {
        return $this->morphedByMany(Patho::class, 'problem', 'problems');
    }

    public function symptoms()
    {
        return $this->morphedByMany(Symptom::class, 'problem', 'problems');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Patho extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function problems(): MorphToMany
    {
        return $this->morphToMany(Client::class, 'problems');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gender extends Model
{
    use HasFactory;

    public $timestamp = false;

    public function clients(): HasMany
    {
        return $this->hasMany(Client::class, 'clients');
    }
}

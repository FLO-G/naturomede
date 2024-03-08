<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class System extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name'];

    public function symptoms(): BelongsToMany
    {
        return $this->belongsToMany(Symptom::class, 'symptom_systems');
    }

    public function pathos(): BelongsToMany
    {
        return $this->belongsToMany(Patho::class, 'patho_systems');
    }

}

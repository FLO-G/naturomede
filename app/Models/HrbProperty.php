<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class HrbProperty extends Model
{
    use HasFactory;

    public $timestamps = false;
    

//    public function curables(): MorphToMany
//     {
//         return $this->morphToMany(Symptom::class, 'curable');
//     }

    public function herbals(): BelongsToMany
    {
        return $this->belongsToMany(Herbal::class, 'herbal_properties');
    }
}

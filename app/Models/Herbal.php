<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Herbal extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name'];

    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(HrbProperty::class, 'herbal_properties');
    }
}

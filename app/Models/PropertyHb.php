<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PropertyHb extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name'];

    public function herbals(): BelongsToMany
    {
        return $this->belongsToMany(Herbal::class, 'herbal_properties');
    }
}

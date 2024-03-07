<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Family extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name'];

    public function aromas(): BelongsToMany
    {
        return $this->belongsToMany(Aroma::class, 'aroma_families');
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class, 'family_properties');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyDetail extends Model
{
    protected $fillable = [
        'property_id', 'slug', 'title', 'address', 'description'
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'status', 'lat', 'lng', 'country', 'location', 'price', 'currency', 'features'
    ];

    public function property_details()
    {
        return $this->hasMany(PropertyDetail::class);
    }

}

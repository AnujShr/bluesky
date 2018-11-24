<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyDetail extends Model
{
    protected $fillable = [
        'slug', 'title', 'address', 'description'
    ];
}

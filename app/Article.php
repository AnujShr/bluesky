<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'description', 'image', 'published', 'status'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}

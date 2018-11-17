<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['slug', 'name'];

    public static function incrementSlug($slug)
    {
        // get the slug of the latest created post
        $max = static::whereName($slug)->latest('id')->value('slug');;
        if (is_numeric($max[-1])) {
            return preg_replace_callback('/(\d+)$/', function ($mathces) {
                return $mathces[1] + 1;
            }, $max);
        }

        return "{$slug}-1";
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['content', 'group'];

    public function saveSetting($data, $group)
    {
        self::query()->updateOrCreate([
            'group' => $group
        ], [
            'content' => $data
        ]);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $fillable = ['slug', 'name'];

    public function pageDetail()
    {
        return $this->hasOne(PageDetail::class, 'page_id');
    }
}

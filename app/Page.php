<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function request()
    {
        return $this->belongsTo('App\Menu', 'page_id');
    }
}

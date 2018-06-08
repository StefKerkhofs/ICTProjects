<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zip extends Model
{
    public function traveller()
    {
        return $this->hasMany('App\Traveller');
    }
}

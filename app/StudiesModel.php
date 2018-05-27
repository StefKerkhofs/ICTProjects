<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudiesModel extends Model
{
    //
    public function traveller()
    {
        return $this->hasMany('App\Traveller');
    }
}

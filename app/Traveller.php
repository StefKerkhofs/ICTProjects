<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traveller extends Model
{
    //
    protected function study()
    {
        return $this->belongsTo('App\StudiesModel');
    }
}

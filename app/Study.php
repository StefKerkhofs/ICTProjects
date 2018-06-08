<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    protected $fillable = [
        'major_id',
        'name'
    ];
    public function major()
    {
        return $this->belongsTo('App\Major');
    }
    public function traveller()
    {
        return $this->hasMany('App\Traveller');
    }
}

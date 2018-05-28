<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    protected $fillable = [
        'study_id',
        'major_id',
        'name'
    ];
    protected function major()
    {
        return $this->belongsTo('App\Major');
    }
    public function traveller()
    {
        return $this->hasMany('App\Traveller');
    }
}

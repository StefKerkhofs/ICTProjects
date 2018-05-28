<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'menu_id',
        'page_id',
        'menu_name'
    ];
    public function page()
    {
        return $this->belongsTo('App\Page');
    }
}

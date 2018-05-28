<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Page;

class Menu extends Model
{
    //

    public function Page()
    {
        return $this->hasMany('App\Page', 'page_id');
    }
}

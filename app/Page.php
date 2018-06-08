<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'page_name',
        'page_content',
        'page_type'
    ];

    public function menu()
    {
        return $this->hasMany(Menu::class, 'page_id');
    }
}

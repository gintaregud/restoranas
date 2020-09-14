<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $fillable = ['title', 'description', 'distance'];

    public function restaurants()
    {
        return $this->hasMany('App\Restaurants');
    }
}

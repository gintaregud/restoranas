<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public $fillable = ['title', 'description', 'distance'];

    public function menus()
    {
        return $this->belongsTo('App\Menu');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contestant extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function vote()
    {
        return $this->hasMany('App\Vote');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function contestant()
    {
        return $this->hasMany('App\Contestant');
    }
}

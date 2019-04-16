<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public function department(){
        return $this->hasMany('App\Department');
    }
}

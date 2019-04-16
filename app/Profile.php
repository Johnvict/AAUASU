<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function postUpdate()
    {
        return $this->belongsTo('App\PostUpdate');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }
}

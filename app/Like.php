<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    // public function postUpdate()
    // {
    //     return $this->belongsTo('App\PostUpdate');
    // }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }

}

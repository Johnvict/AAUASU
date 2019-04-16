<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function postUpdate()
    {
        return $this->belongsTo('App\PostUpdate');
    }
    public function User()
    {
        return $this->belongsTo('App\User');
    }
}

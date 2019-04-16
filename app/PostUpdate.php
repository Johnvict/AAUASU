<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostUpdate extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    public function getShortContentAttribute()
    {
        return substr($this->content, 0, random_int(100, 200)).'...';
    }
}

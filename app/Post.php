<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $fillable = ['title', 'description'];

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
        return $this->belongsTo('App\Like');
    }

    public function getShortContentAttribute()
    {
        return substr($this->content, 0, random_int(100, 200)).'...';
    }
}

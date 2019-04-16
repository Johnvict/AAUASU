<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function post()
    {
        return $this->hasMany('App\Post');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    public function profile()
    {
        return $this->hasMany('App\Profile');
    }
    public function chat()
    {
        return $this->hasMany('App\Chat');
    }
    public function course()
    {
        return $this->hasMany('App\Course');
    }
    public function gpa()
    {
        return $this->hasMany('App\Gpa');
    }

    public function material()
    {
        return $this->hasMany('App\Material');
    }
}

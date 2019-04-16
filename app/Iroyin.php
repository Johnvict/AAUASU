<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iroyin extends Model
{
    public function getShortBodyAttribute()
    {
        return substr($this->body, 0, random_int(40, 80)).'...';
    }

    public function getFewerBodyAttribute()
    {
        return substr($this->body, 0, random_int(80, 150)).'...';
    }
}

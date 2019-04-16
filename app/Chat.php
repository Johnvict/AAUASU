<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    public function conversation()
    {
        return $this->belongsTo('App\Conversation');
    }
}

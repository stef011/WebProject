<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function pictures()
    {
        return $this->hasMany(Picture::class, 'eventId');
    }
}

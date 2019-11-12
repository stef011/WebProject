<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    public function pictures()
    {
        return $this->hasMany(Picture::class, 'eventId');
    }
}

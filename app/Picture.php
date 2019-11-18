<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{

    public function event()
    {
        return $this->belongsTo(Event::class, 'eventId');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'pictureId');
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    public function likesNumber()
    {
        return $this->likes->count();
    }

    //TODO : Link with users external table

}

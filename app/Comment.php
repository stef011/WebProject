<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    

    public function picture()
    {
        return $this->belongsTo(Picture::class, 'pictureId');
    }

    //TODO : Link with users external table
}

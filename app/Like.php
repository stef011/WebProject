<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public $timestamps = false;



    public function picture()
    {
        return $this->belongsTo(Picture::class, '');
    }
}

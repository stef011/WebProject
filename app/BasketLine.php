<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasketLine extends Model
{
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    
}

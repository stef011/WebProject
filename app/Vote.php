<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public $timestamps = false;

    public function idea()
    {
        return $this->belongsTo(App\Idea::class, 'ideaId');
    }
}

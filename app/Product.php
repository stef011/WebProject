<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function baskets()
    {
        return $this->belongsTo(BasketLine::class, 'productId');
    }

    public function scopeSearch($query, $q)
    {
        if ($q == null) return $query;
        return $query
                ->where('title', 'LIKE', "%{$q}%")
                ->orWhere('description', 'LIKE', "%{$q}%");
    }
}

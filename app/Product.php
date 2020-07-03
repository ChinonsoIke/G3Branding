<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function getImage()
    {
        return $this->image ?? 'default.jpg';
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function prices()
    {
        return $this->hasMany(ProductPrice::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function getImage()
    {
        return $this->image ?? 'default.jpg';
    }
}

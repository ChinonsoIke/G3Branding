<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    public function prices()
    {
        return $this->hasMany(CategoryPrice::class, 'category_id');
    }

    public function orders()
    {
        return $this->hasMany(Category::class);
    }

    public function getImage()
    {
        return $this->image ?? 'default.jpg';
    }
}

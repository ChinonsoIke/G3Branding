<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id'];
    public function slug()
    {
    	$word = substr($this->p_content, 0,80);
    	$slug = $word . "...";
    	
    	return $slug;
    }
}

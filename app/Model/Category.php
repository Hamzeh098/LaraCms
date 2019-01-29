<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $fillable = ['title'];

    public function posts()
    {
        return $this->belongsToMany(Post::class,'category_post','category_id','post_id');
    }
}

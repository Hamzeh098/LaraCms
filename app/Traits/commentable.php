<?php
/**
 * Created by PhpStorm.
 * User: MOHAMMAD
 * Date: 29/01/2019
 * Time: 05:58 PM
 */

namespace App\Traits;


use App\Model\Comment;

trait commentable
{
    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }
}
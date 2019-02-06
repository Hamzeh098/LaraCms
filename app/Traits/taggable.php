<?php
/**
 * Created by PhpStorm.
 * User: MOHAMMAD
 * Date: 31/01/2019
 * Time: 05:46 PM
 */

namespace App\Traits;


use App\Model\Tag;

trait taggable
{
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}

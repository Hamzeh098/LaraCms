<?php

namespace App\Model;

use App\Traits\commentable;
use App\Traits\taggable;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use commentable,taggable;
}

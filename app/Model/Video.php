<?php

namespace App\Model;

use App\Traits\commentable;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use commentable;
}

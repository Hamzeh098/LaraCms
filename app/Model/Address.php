<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFullState()
    {
        return $this->attributes['state'] . ' / ' . $this->attributes['city'];
    }
}

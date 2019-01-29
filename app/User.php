<?php

namespace App;

use App\Model\Address;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    const ADMIN = 1;
    const USER = 2;


    protected $fillable
        = [
            'name',
            'email',
            'password',
        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden
        = [
            'password',
            'remember_token',
        ];

    public function address()
    {
        return $this->hasOne(Address::class);
    }

    public static function getUserRoles()
    {
        return [
            self::USER  => 'کاربر عادی',
            self::ADMIN => 'کاربر مدیر',
        ];
    }
}

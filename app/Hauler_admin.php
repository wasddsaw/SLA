<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Hauler_admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'hauler_admin'; 

    protected $fillable = [
        'username', 'email', 'password', 'hauler_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Hauler_admin extends Model
{
    use Notifiable;

    protected $fillable = [
        'username', 'email', 'password', 'hauler_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

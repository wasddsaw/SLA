<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hauler extends Model
{
    protected $table = 'haulers';
    public $primaryKey = 'id';
    public $timestamp = true;

    public function roadtankers(){
        return $this->hasMany('App\Roadtanker');
    }
    public function hauler_admins()
    {
        return $this->hasMany('App\Hauler_admin');
    }

}

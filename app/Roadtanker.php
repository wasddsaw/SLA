<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roadtanker extends Model
{
    protected $fillable = [
        'plate', 'capacity', 'terminal', 'hauler_id',
    ];

    public function hauler(){
        return $this->belongsTo('App\Hauler');
    }
}

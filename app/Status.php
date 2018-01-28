<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    // protected $fillable = [
    //     'remarks_hauler', 'remarks_foe', 'status', 'time', 'roadtanker_id',
    // ];

    protected $table = 'statuses';
    public $primaryKey = 'id';
    public $timestamp = true;

    public function roadtanker(){
        return $this->belongsTo('App\Roadtanker');
    }
}

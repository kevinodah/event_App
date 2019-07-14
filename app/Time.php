<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $fillable = ['time_start', 'time_stop', 'count', 'published'];

    public function event(){
        return $this->belongsTo('App\Event');
    }
}

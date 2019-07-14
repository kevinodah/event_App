<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'description', 'contact', 'published'];

    public function venues(){
        return $this->hasMany('App\Venue');
    }

    public function times(){
        return $this->hasMany('App\Time');
    }

    public function costs(){
        return $this->hasMany('App\Cost');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function users(){
        return $this->belongsToMany('App\User', 'event_user');
    }

}

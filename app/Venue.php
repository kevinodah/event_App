<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $fillable = ['name_of_location', 'address', 'count', 'published'];

    public function event(){
        return $this->belongsTo('App\Event');
    }
}

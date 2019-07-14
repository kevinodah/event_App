<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    protected $fillable = ['price', 'details', 'count', 'published'];
    
    public function event(){
        return $this->$belongsTo('App\Event');
    }
}

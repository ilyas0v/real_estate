<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeImage extends Model
{
    public function home(){
        return $this->belongsTo('Home' , 'home_id');
    }
}

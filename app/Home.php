<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    public function region(){
        return $this->belongsTo('App\Region' , 'region_id');
    }
}

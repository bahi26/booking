<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    //
    public function booking(){
        return $this->hasMany('App\booking');
    }
}

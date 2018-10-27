<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    //

    public function room(){
        return $this->belongsTo('App\room','room_id');
    }
}

<?php

namespace App\Model\applying;

use Illuminate\Database\Eloquent\Model;

class Applying extends Model
{
    //
    public function bank()
    {
        return $this->belongsTo('App\Model\bank\Bank');
        //return $this->hasOne('App\Model\bank\Bank');
    }
}

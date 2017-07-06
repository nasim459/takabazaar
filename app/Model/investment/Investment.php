<?php

namespace App\Model\investment;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    //
    public function bank()
    {
        return $this->belongsTo('App\Model\bank\Bank');
        //return $this->hasOne('App\Model\bank\Bank');
    }
}

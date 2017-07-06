<?php

namespace App\Model\loan;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    //
    public function bank()
    {
        return $this->belongsTo('App\Model\bank\Bank');
        //return $this->hasOne('App\Model\bank\Bank');
    }
}

<?php

namespace App\Model\investment;

use Illuminate\Database\Eloquent\Model;
use App\Model\bank\Bank;

class Investment extends Model
{
    //
    public function bank()
    {
        //return $this->hasOne('App\Model\bank\Bank', 'foreign_key', 'bank_name');

        return $this->belongsTo(Bank::class);
        //return $this->hasOne('App\Model\bank\Bank');
    }
}

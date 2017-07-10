<?php

namespace App\Model\applying;

use Illuminate\Database\Eloquent\Model;
use App\Model\bank\Bank;
use App\Model\loan\Loan;
use App\Model\investment\Investment;
use App\Model\insurance\Insurance;

class Applying extends Model
{
    //
//    public function banks()
//    {
//        return $this->belongsToMany(Bank::class);
//    }
    //
    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }

    public function investment()
    {
        return $this->belongsTo(Investment::class);
    }

    public function insurance()
    {
        return $this->belongsTo(Insurance::class);
    }
}

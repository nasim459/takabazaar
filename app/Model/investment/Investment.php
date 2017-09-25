<?php

namespace App\Model\investment;

use Illuminate\Database\Eloquent\Model;
use App\Model\bank\Bank;
use App\Model\review\Review;

class Investment extends Model
{
    //
    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    //
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}

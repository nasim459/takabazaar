<?php

namespace App\Model\loan;

use App\Model\review\Review;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    //
    public function bank()
    {
        return $this->belongsTo('App\Model\bank\Bank');
    }

    //
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}

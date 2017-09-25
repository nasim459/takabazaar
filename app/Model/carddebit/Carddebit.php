<?php

namespace App\Model\carddebit;

use Illuminate\Database\Eloquent\Model;
use App\Model\bank\Bank;
use App\Model\cardcategorie\Cardcategorie;
use App\Model\review\Review;

class Carddebit extends Model
{
    //
    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    //
    public function cardcategorie()
    {
        return $this->belongsTo(Cardcategorie::class);
    }

    //
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}

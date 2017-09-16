<?php

namespace App\Model\card;

use App\Model\review\Review;
use Illuminate\Database\Eloquent\Model;
use App\Model\bank\Bank;
use App\Model\cardcategorie\Cardcategorie;

class Card extends Model
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
    public function review()
    {
        return $this->hasMany(Review::class, 'id', 'card_id');
    }
}

<?php

namespace App\Model\insurance;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
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

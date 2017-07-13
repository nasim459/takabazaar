<?php

namespace App\Model\bank;

use Illuminate\Database\Eloquent\Model;
use App\Model\applying\Applying;

class Bank extends Model
{
    //
    public function applyings(){
        return $this->belongsToMany(Applying::class);
    }
}

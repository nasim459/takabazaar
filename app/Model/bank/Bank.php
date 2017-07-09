<?php

namespace App\Model\bank;

use App\Model\applying\Applying;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    //
    public function applyings(){
        return $this->belongsToMany(Applying::class);
    }
}

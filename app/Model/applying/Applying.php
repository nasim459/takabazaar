<?php

namespace App\Model\applying;

use Illuminate\Database\Eloquent\Model;
use App\Model\bank\Bank;

class Applying extends Model
{
    //
    public function banks()
    {
        return $this->belongsToMany(Bank::class);
    }
}

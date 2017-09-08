<?php

namespace App\Model\blog;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    public function categories(){
        return $this->belongsToMany(Categories::class);
    }
}

<?php

namespace App\Model\blog;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    public function category(){
        return $this->belongsTo(Categories::class);
    }

    //
    public function bloguser(){
        return $this->belongsTo(Bloguser::class);
    }
}

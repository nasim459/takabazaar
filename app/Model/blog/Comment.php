<?php

namespace App\Model\blog;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public function bloguser(){
        return $this->belongsTo(Bloguser::class);
    }

    //
    public function commentreplaies(){
        return $this->hasMany(Commentreplay::class);
    }
}

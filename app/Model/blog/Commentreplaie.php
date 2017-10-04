<?php

namespace App\Model\blog;

use Illuminate\Database\Eloquent\Model;

class Commentreplaie extends Model
{
    //
    public function bloguser(){
        return $this->belongsTo(Bloguser::class);
    }
    public function user(){
    return $this->belongsTo(User::class);
}
}

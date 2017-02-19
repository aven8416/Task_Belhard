<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public  function comment() {

        $this->belongsTo('App\Comment');
    }
}

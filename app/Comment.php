<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function story(){
        return $this->belongsTo('App\Story');
    }
}

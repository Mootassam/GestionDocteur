<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travaille extends Model
{

    public function Doctor()
    {
        return $this->belongsTo('App\Doctor');
    }
    //
}

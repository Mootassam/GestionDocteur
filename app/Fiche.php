<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fiche extends Model
{



    public function appointments()
    {
        return $this->hasMany('App\Appointments');
    }

    //
}

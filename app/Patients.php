<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    public function Appointments()
    {
        return $this->hasMany('App\Appointments');
    }
    //
}

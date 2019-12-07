<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    //
public function fiche(){     
    return $this->belongsTo('App\Fiche');
}

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

 public function doctor()
 {
     return $this->belongsTo('App\Doctor');
 }

}

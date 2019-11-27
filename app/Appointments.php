<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{

    public function Fiche(){ 
      
            return $this->belongsTo('App\Fiche');
       
    }
    public function Patient(){ 
        return $this->belongsTo('App\Patients');
    }

    public function user()
    {
        return $this->belongsTo('App\Doctor');
    }
 
    //
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Doctor extends Model
{
    //


    public function special(){ 

        return $this->belongsTo('App\Specialites') ;
    }
    public function Travaille(){ 

        return $this->hasMany('App\Travaille'); 
    }
    
    public function Appointments()
    {
        return $this->hasMany('App\Appointments');
    }

   
}
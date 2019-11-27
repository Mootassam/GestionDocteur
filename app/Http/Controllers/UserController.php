<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; 

class UserController extends Controller
{

    public function listUser(){ 

        $list= User::all(); 
        return view('pages.profile' , ['list' => $list ]) ;
    }
 
    public function chercher(Request $request){
        $nom = $request->input('nom') ; 
        $list = User::where('name' , 'like' ,'%' .$nom. '%')->get(); 
if($list){ 
        return view('pages.profile' , ['list' => $list ]) ; }
        else { 
            dd('introuvable') ;
        }
   
}
    //
}

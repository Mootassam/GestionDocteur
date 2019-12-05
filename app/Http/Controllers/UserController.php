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

public function store(Request $request){ 

    
    $request_data = $request->except(['password','password_confirmation', 'permissions']); 
    $request_data['password'] = bcrypt($request->password); 
    $user = User::create($request_data); 
    $user->attachRole('admin'); 
    $user->syncPermissions($request->permissions) ;



}
    //
}

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
        $list = User::where('first_name' , 'like' ,'%' .$nom. '%')->latest()->simplePaginate(1); 
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

    session()->flash('success',' le user a ete ajouter avec success'); 
    return redirect('listprofile') ;
}

public function destroy($id) { 
    $user = User::find($id); 
    $user->delete(); 
    session()->flash('success','le user a ete supprimer avec success'); 
    return redirect('listprofile'); 
}
    //
}

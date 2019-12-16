<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{


    public function listUser(){
      /*  if(!Gate::allows('isAdmin'))
        {
             abort(404,"sorry you can not do this action") ;
        } */
        $list = User::paginate(5);
        return view('pages.profile', compact('list'));
    }

    public function chercher(Request $request){
        $nom = $request->input('nom') ;
        $list = User::where('name' , 'like' ,'%' .$nom. '%')->latest()->simplePaginate(0);
        if($list){
        return view('pages.profile' , ['list' => $list ]) ; }
        else {
            dd('introuvable') ;
        }
}

//public function store(Request $request){

//    $request_data = $request->except(['password','password_confirmation', 'permissions']);
 //   $request_data['password'] = bcrypt($request->password);
 //   $user = User::create($request_data);
 //   $user->attachRole('admin');
 //   $user->syncPermissions($request->permissions) ;

  //  session()->flash('success',' le user a ete ajouter avec success');
  //  return redirect('listprofile') ;
// }
public function update(Request $request,$id)
{
    $user= User::find($id);
     $user->name = $request->input('name');
    $user->email = $request->input('email');
    $pass = bcrypt($request->input('password'));
    $user->password = $pass ;
    $user->user_type = $request->input('user_type');
    $user->save();
    session()->flash('success',' le user a ete ajouter avec success');
    return redirect('listprofile') ;

}

public function store(Request $request){

    $user= new User();
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $pass = bcrypt($request->input('password'));
    $user->password = $pass ;
    $user->user_type = $request->input('user_type');
   /* $user->profile_image= $request->get('pic')->store('image');*/
    $user->save();
    session()->flash('success',' le user a ete ajouter avec success');
    return redirect('listprofile') ;
 }

public function destroy($id) {

    $user = User::find($id);
    $user->delete();
    session()->flash('success','le user a ete supprimer avec success');
    return redirect('listprofile');
}
public function edit($id) {

    $user = User::find($id);
    return redirect('listprofile') ;
}
    //
}

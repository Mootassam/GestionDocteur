<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialites ; 
class specialController extends Controller
{

    public function listSpecial(){ 
        $list=Specialites::all(); 

        return view('pages.listspacial', ['list' => $list]) ;

    }
    public function saveList(Request $request){ 

        $list= new Specialites(); 
        $list->nom = $request->input('nom') ;
        $list->save() ; 
        return redirect('GDOCTOR/listSpecial'); 
    }
    public function destroy(Request $request,$id)
    { 
        $list = Specialites::find($id); 
        $list->delete(); 
        return redirect('GDOCTOR/listSpecial');

    }
    
    public function update(REQUEST $request,$id)
    { 
        $list =  $list = Specialites::find($id); 
        $list->nom = $request->input('nom') ;
        $list->save() ; 
        return redirect('GDOCTOR/listSpecial');


    }
    //
}

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
        $request->validate ([
      'nom' =>'required|min:3|alpha'
       ]);        
        $spec= new Specialites(); 
        $nom=$request->get('nom'); 
     
        $list= Specialites::where('nom','like','%'.$nom)->get(); 

        
        if(count($list)>0){ 
            session()->flash('error', 'slvp saisir une nouvelle specialité'); 
            return redirect('GDOCTOR/listSpecial');
        }
        else{ 
            $spec->nom = $request->input('nom') ;
            $spec->save() ; 
            session()->flash('success', 'Enregistrement est fait par success'); 
            return redirect('GDOCTOR/listSpecial');
        }
       // $list= Specialites::create(request()->all());  //

    }
    public function destroy(Request $request,$id)
    { 
        $list = Specialites::find($id); 
        $list->delete(); 
        return redirect('GDOCTOR/listSpecial');

    }

  
    
   
    //
}

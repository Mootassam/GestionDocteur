<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialites;
use App\Doctor ;
use App\Http\Requests\DoctorRequest ;
use App\Joursdetravaill ;

class doctorController extends Controller
{

    public function listD(){
        $list = Doctor::all();
        $names = Specialites::all();

        return view ('pages.doctor.addDoctor', compact('list' ,'names')) ;
    }




    public function store(DoctorRequest $request){



        $list = new Doctor();
        $list->name= $request->input('nom');
        $list->lastname= $request->input('prenom');
        $list->avatar= $request->input('avatar');
        $list->email= $request->input('email');
        $list->password= $request->input('pass');
        $list->special_id= $request->get('spec');
        $list->tel= $request->input('tel');
        $list->imgCin= $request->input('cin');
        $list->bio= $request->input('pic');
        $list->prixVisite= $request->input('prix');
        $list->active='0' ;
        $list->visible='0' ;
        $list->verifHach='0' ;
        $list->latitude='0' ;
        $list->longitude='0' ;
        $list->remeber_token='0' ;
        $list->save() ;

        return redirect ('allmedecin') ;
    }
    public function index(){
        $list = Doctor::all();
           $names = Specialites::all();
        return view ('pages.doctor.listeMedecin', compact('list' ,'names'));

    }
    public function chercher(Request $request){


    $names = Specialites::all();
        $nom = $request->input('nom') ;


        $list=Doctor::where('name','like','%'.$nom)->get() ;

        return view ('pages.doctorlisteMedecin', compact('list' ,'names'));


    }

      public function destroy($id) {

            $list = Doctor::find($id);
            $list->delete();
            session()->flash('success', 'le doctor a ete supprimer ') ;
            return redirect('allmedecin');

        }



    //
}

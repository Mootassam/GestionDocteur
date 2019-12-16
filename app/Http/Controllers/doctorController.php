<?php

namespace App\Http\Controllers;

use App\User;
use App\Doctor ;
use App\Specialites;
use App\Joursdetravaill ;
use Illuminate\Http\Request;
use App\Http\Requests\DoctorRequest ;

class doctorController extends Controller
{

        public function listD(){
            $list = Doctor::all();
            $names = Specialites::all();
            $user = User::where('user_type', '==', 'doctor')->get();
            return view ('pages.doctor.addDoctor', compact('list' ,'names', 'user')) ;
        }

        public function store(DoctorRequest $request){


            $list = new Doctor();
            $list->user_id= $request->get('user_id') ;
            $list->special_id= $request->get('spec');
            $list->prixVisite= $request->input('prix');
            $list->active='0' ;
            $list->visible='0' ;
            $list->verifHach='0' ;
            $list->latitude='0' ;
            $list->longitude='0' ;

            $list->save() ;


            return redirect ('allmedecin') ;
        }

        public function index(){
            $list = Doctor::all();
            $names = Specialites::all();
            $user = User::where('user_type', '=', 'doctor')->get();
            return view ('pages.doctor.listeMedecin', compact('list' ,'names','user'));

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

        public function show(){

            $list = Doctor::all();
            $names = Specialites::all();
            $doctor = User::where('user_type', '=', 'doctor')->get();
            return view ('pages.patient.list', compact('doctor' ,'names','user'));
        }


    //
}

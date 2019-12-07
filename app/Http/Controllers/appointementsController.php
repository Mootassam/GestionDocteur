<?php

namespace App\Http\Controllers;

use App\Fiche;
use App\Doctor;
use App\Patient;
use App\Appointments;
use Illuminate\Http\Request;

class appointementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list= Appointments::all() ;
        $doctor= Doctor::all(); 
        $patient = Patient::all(); 
        $fiche= Fiche::all(); 
        return view('pages.appointements.index' , compact('list', 'doctor','patient', 'fiche'))  ;
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   $list = new Appointments(); 
         $list->idD= $request->get('idD');
         $list->pid= $request->get('pid');  
         $list->fid= $request->get('fid'); 
          $list->etat= $request->get('etat');
          $list->save(); 
     session()->flash('success','enregistrement a ete avec success') ;
     return redirect('appointements/index'); 
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $list= Appointments::find($id); 
        $list->delete(); 
        session()->flash('success',' la suppression a ete effectuer avec success'); 
        return redirect('appointements/index'); 

        //
    }
}

<?php

namespace App\Http\Controllers;

use App\User;

use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class patientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $list = Patient::all();
        $user = User::where('user_type', '=', 'user')->get();
     return view('pages.patient',compact('list','user')) ;
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.addpatient') ;
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

            $list = new Patient() ;
            $list->user_id= $request->get('user_id');
            $list->name = $request->input('nom');
            $list->lastName = $request->input('prenom');
            $list->email = $request->input('email');
            $list->dateNaiss = $request->input('date');
            $list->numCNSS = $request->input('cnss');
            $list->etat= $request->get('etat');
            $list->rendezVous= $request->get('date');


$list->save();
session()->flash('success','le Patient a ete ajouter avec success');

return redirect('index');


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
        $list = Patient::find($id);
        $list->user_id = Auth::user()->id ;
        $list->name = Auth::user()->name ;
        $list->email= Auth::user()->email;
        $list->dateNaiss= '';
        $list->numCNSS= ' ';
        $list->etat='Attente';
        $list->rendezVous='';
        $list->save();
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

        $list = Patient::find($id) ;
        $list->delete();
        return redirect('index');

        //
    }
}

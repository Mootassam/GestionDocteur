<?php

namespace App\Http\Controllers;

use App\Patients;
use Illuminate\Http\Request;

class patientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $list = Patients::all(); 
     return view('pages.patient',compact('list')) ;
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
      return  $request->validate([ 'pass' =>'required', ]); 
        $list = new Patients() ; 
          $list->name = $request->input('nom'); 
$list->lastName = $request->input('prenom'); 
$list->email = $request->input('email'); 
$list->password = $request->input('pass'); 
$list->dateNaiss = $request->input('date'); 
$list->numCNSS = $request->input('cnss'); 
$list->remeber_token = '25'; 

$list->save(); 

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

        $list = Patients::find($id) ;
        $list->delete(); 
        return redirect('index'); 
        
        //
    }
}

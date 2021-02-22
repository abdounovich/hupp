<?php

namespace App\Http\Controllers;

use App\Criter;
use Illuminate\Http\Request;

class CriterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $criters=Criter::all();
        return view('criters.index')->with("criters",$criters);
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

     
        $nom = $request->get('nom');
        $designation = $request->get('designation');
        $descreption = $request->get('descreption');
        $ponderation = $request->get('ponderation');

        $criters=new Criter();
        $criters->nom=$nom;
        $criters->designation=$designation;
        $criters->descreption=$descreption;
        $criters->ponderation=$ponderation;

        $criters->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Criter  $criter
     * @return \Illuminate\Http\Response
     */
    public function show(Criter $criter)
    {
        //
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
$criters=Criter::all();
        $criter=Criter::find($id);
        return view('criters.edit')
        ->with("criter",$criter);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Criter  $criter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {


     
        $criter=Criter::find($id);
        $criter->nom=$request->get('nom');
        $criter->designation=$request->get('designation');
        $criter->descreption=$request->get('descreption');
        $criter->ponderation=$request->get('ponderation');
        $criter->save();
        return redirect()->route('criters.index');

    }

   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $criter=Criter::find($id)->delete();
        return back();
    }
}

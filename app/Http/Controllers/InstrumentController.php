<?php

namespace App\Http\Controllers;

use App\Instrument;
use App\Criter;
use App\Categorie;


use Illuminate\Http\Request;

class InstrumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instrumentsActive=Instrument::whereType("1")->get();
        $instrumentsInactive=Instrument::whereType("0")->get();

        $criters=Criter::all();
        $categories=Categorie::all();
        return view('instruments.index')
        ->with("instrumentsActive",$instrumentsActive)
        ->with("instrumentsInactive",$instrumentsInactive)
        ->with("categories",$categories)
        ->with("criters",$criters);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        $ref = $request->get('ref');
        $date_der = $request->get('date_der');
        $date_proch = $request->get('date_proch');
        $period_act = $request->get('period_act');
        $period_calcu = "0";
        $categorie = $request->get('categorie');
        $c1 = "0";
        $c2 = "0";
        $c3 = "0";
        $c4 = "0";
        $c5 = "0";
        $c6 = "0";
        $c7 = "0";
        $c8 = "0";
        $c9 = "0";
        $instrument=new Instrument();
        $instrument->nom=$nom;
        $instrument->ref=$ref;
        $instrument->date_proch=$date_proch;
        $instrument->date_dernier=$date_der;
        $instrument->perio_actu=$period_act;
        $instrument->perio_calcul=$period_calcu;
        $instrument->category_id=$categorie;
        $instrument->c1=$c1;
        $instrument->c2=$c2;
        $instrument->c3=$c3;
        $instrument->c4=$c4;
        $instrument->c5=$c5;
        $instrument->c6=$c6;
        $instrument->c7=$c7;
        $instrument->c8=$c8;
        $instrument->c9=$c9;
        $instrument->type=0;
        $instrument->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function show(Instrument $instrument)
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
$categories=Categorie::all();
        $instrument=Instrument::find($id);
        return view('instruments.edit')
        ->with("categories",$categories)
        ->with("instrument",$instrument);
        
    }
 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function modifier_perio( Request $request , $id){
        $period_calcu=$request->get('per_opt');

            $instrument=Instrument::find($id);
            $instrument->perio_calcul=$period_calcu;
            $instrument->save();
            return   redirect()->route("instruments.index");


    }


     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function modifier( Request $request , $id)
    {
        $instrument=Instrument::find($id);
        $instrument->nom=$request->get('nom');
        $instrument->ref=$request->get('ref');
        $instrument->date_proch=$request->get('date_proch');
        $instrument->date_dernier=$request->get('date_der');
        $instrument->perio_actu=$request->get('period_act');
        $categorie = $request->get('categorie');
        $instrument->category_id=$categorie;
        $instrument->c1=$request->get('C1');
        $instrument->c2=$request->get('C2');
        $instrument->c3=$request->get('C3');
        $instrument->c4=$request->get('C4');
        $instrument->c5=$request->get('C5');
        $instrument->c6=$request->get('C6');
        $instrument->c7=$request->get('C7');
        $instrument->c8=$request->get('C8');
        $instrument->c9=$request->get('C9');
        $instrument->save();

        
        return   redirect()->route("instruments.index");


    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $instrument=Instrument::find($id);
        $instrument->c1=$request->get('C1');
        $instrument->c2=$request->get('C2');
        $instrument->c3=$request->get('C3');
        $instrument->c4=$request->get('C4');
        $instrument->c5=$request->get('C5');
        $instrument->c6=$request->get('C6');
        $instrument->c7=$request->get('C7');
        $instrument->c8=$request->get('C8');
        $instrument->c9=$request->get('C9');
        $instrument->type="1";
        $instrument->save();

        
        return back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instrument=Instrument::find($id)->delete();
        return back();


    }
 /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {

        $criters=Criter::all();
        $query=$request->get('search');
        $instruments=Instrument::Where('nom', 'like', '%' . $query . '%')->get();
        return view('instruments.search')
        ->with("instruments",$instruments)
        ->with("query",$query)                
        ->with("criters",$criters);
        

    }
}

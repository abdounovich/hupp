<?php

namespace App\Http\Controllers;

use App\medicaments;
use Illuminate\Http\Request;

class MedicamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('medicaments.index');
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
        $dci = $request->get('dci');
        $dosage = $request->get('dosage');
        $nett = $request->get('nett');
        $sol = $request->get('sol');
        $tox = $request->get('tox');
        $dose_min = $request->get('dose_min');
        $dose_max = $request->get('dose_max');
        $classe = $request->get('classe');
        $dose_ther = $request->get('dose_ther');
        $total =$classe * $dose_ther * $nett * $sol;
$medicament=new medicaments();
$medicament->nom=$nom;
$medicament->dci=$dci;
$medicament->dosage=$dosage;
$medicament->tox=$tox;
$medicament->nett=$nett;
$medicament->sol=$sol;
$medicament->dose_min=$dose_min;
$medicament->dose_max=$dose_max;

$medicament->classe=$classe;
$medicament->dose_ther=$dose_ther;
$medicament->total=$total;
$medicament->save();




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\medicaments  $medicaments
     * @return \Illuminate\Http\Response
     */
    public function show(medicaments $medicaments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\medicaments  $medicaments
     * @return \Illuminate\Http\Response
     */
    public function edit(medicaments $medicaments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\medicaments  $medicaments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medicaments $medicaments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\medicaments  $medicaments
     * @return \Illuminate\Http\Response
     */
    public function destroy(medicaments $medicaments)
    {
        //
    }
}

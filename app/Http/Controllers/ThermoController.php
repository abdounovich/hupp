<?php

namespace App\Http\Controllers;

use App\thermo;
use Illuminate\Http\Request;

class ThermoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($humidity,$temperature)
    {
        $value=new Thermo();
        date_default_timezone_set('Africa/Algiers');
        $value->temperature=$temperature;
        $value->humidity=$humidity;
        $value->save();
        echo 'done' . "\n";
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\thermo  $thermo
     * @return \Illuminate\Http\Response
     */
    public function show(thermo $thermo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\thermo  $thermo
     * @return \Illuminate\Http\Response
     */
    public function edit(thermo $thermo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\thermo  $thermo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, thermo $thermo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\thermo  $thermo
     * @return \Illuminate\Http\Response
     */
    public function destroy(thermo $thermo)
    {
        //
    }
}

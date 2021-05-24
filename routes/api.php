<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\thermo;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/add/{humidity}/{temperature}', function ($humidity, $temperature) {
    $value=new thermo();
    date_default_timezone_set('Africa/Algiers');
    $value->temperature=$temperature;
    $value->humidity=$humidity;
    $value->save();
    echo 'done' . "\n";
});

Route::get('/show', function () {

$values=thermo::all();

return view('thermo')->with("values",$values);
});



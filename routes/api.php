<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Thermo;
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
Route::get('/aa', function () {
return "ok";

});

Route::get('/add', function ($humidity, $temperature) {
    $value=new Thermo();
    date_default_timezone_set('Africa/Algiers');
    $value->temperature=$temperature;
    $value->humidity=$humidity;
    $value->save();
    echo 'done' . "\n";
});

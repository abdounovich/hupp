<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/instruments', "InstrumentController@index")->name("instruments.index");
Route::post('/instruments/add', "InstrumentController@store");
Route::post('/instruments/update/{id}', "InstrumentController@update");
Route::get('/instruments/delete/{id}', "InstrumentController@destroy")->name("instruments.delete");
Route::get('/instruments/edit/{id}', "InstrumentController@edit")->name("instruments.edit");
Route::post('/instruments/edit/{id}', "InstrumentController@modifier");
Route::post('/instruments/search', "InstrumentController@search")->name("instruments.search");
Route::post('/instruments/edit-perio/{id}', "InstrumentController@modifier_perio");


Route::get('/criters', "CriterController@index")->name("criters.index");
Route::get('/criters/delete/{id}', "CriterController@destroy");
Route::get('/criters/edit/{id}', "CriterController@edit")->name("criters.edit");
Route::post('/criters/edit/{id}', "CriterController@update")->name("criters.update");
Route::post('/criters/add', "CriterController@store")->name("criter.add");



Route::get('/categories', "CategorieController@index")->name("categories.index");
Route::get('/categories/delete/{id}', "CategorieController@destroy")->name("categories.delete");
Route::get('/categories/edit/{id}', "CategorieController@edit")->name("categories.edit");
Route::post('/categories/edit/{id}', "CategorieController@update")->name("categories.update");
Route::post('/categories/add', "CategorieController@store")->name("categories.add");



Route::get('/information', function () {
    return view('information');
});


Route::get('/1', function () {

    $instruments=App\Instrument::paginate(5);

    return view('information')->with("instruments",$instruments);
});

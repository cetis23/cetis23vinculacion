<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',function(){
    return view('welcome');
});

Route::get('/mensaje',function(){
    echo "cetis 23";
});

Route::get('/at','curso@areatriangulo');
Route::get('/ac/{radio}','curso@areacirculo');

Route::get('/altamaestro','curso@altamaestro');
Route::POST('/guardamaestro','curso@guardamaestro')->name('guardamaestro');
Route::get('/reportemaestros','curso@reportemaestros');
Route::get('/eliminam/{idm}','curso@eliminam')->name('eliminam');
Route::get('/modificam/{idm}','curso@modificam')->name('modificam');
Route::POST('/guardaedicionm','curso@guardaedicionm')->name('guardaedicionm');
Route::get('/altaespecialidades','curso@altaespecialidades')->name('altaespecialidades');
Route::POST('/guardaespecialidad','curso@guardaespecialidad')->name('guardaespecialidad');

Route::get('/altaciclo','curso@altaciclo')->name('altaciclo');
Route::POST('/guardaciclo','curso@guardaciclo')->name('guardaciclo');

Route::get('/altatitulo','curso@altatitulo')->name('altatitulo');
Route::POST('/guardatitulo','curso@guardatitulo')->name('guardatitulo');


<<<<<<< HEAD
// mis catalogos 
Route::get('/altaciclo','curso@altaciclo');
Route::POST('/guardaciclo','curso@guardaciclo')->name('gcic');

=======
Route::get('/altaestado','curso@altaestado');
Route::POST('/guardaestado','curso@guardaestado')->name('ges');

Route::get('/altamunicipio','curso@altamunicipio');
Route::POST('/guardamunicipio','curso@guardamunicipio')->name('gmun');


Route::get('/altatipot','curso@altatipotitulo');
Route::POST('/guardatipot','curso@guardatipotitulo')->name('gtt');


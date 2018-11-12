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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mensaje', function () {
    echo "cetis 23 ";
});


Route::get('/at','curso@areatriangulo');
Route::get('/ac/{radio}','curso@areacirculo');

Route::get('/altamaestro','curso@altamaestro');
Route::POST('/guardamaestro','curso@guardamaestro')->name('guardamaestro');

Route::get('/vprincipal','curso@principal');

Route::get('/altaestado','curso@altaestado');
Route::POST('/guardaestado','curso@guardaestado')->name('ges');
Route::get('/reporteestados','curso@muestraestados')->name('muestraest');

Route::get('/altamunicipio','curso@altamunicipio');
Route::POST('/guardamunicipio','curso@guardamunicipio')->name('gmun');
Route::get('/reportemunicipios','curso@muestramunicipios')->name('muestramun');

Route::get('/altatipot','curso@altatipotitulo');
Route::POST('/guardatipot','curso@guardatipotitulo')->name('gtt');
Route::get('/reportetipost','curso@muestratipost')->name('muestratipot');


Route::get('/altatitulo','curso@altatitulo');
Route::POST('/guardatitulo','curso@guardatitulo')->name('gtit');
Route::get('/reportetitulo','curso@muestratitulo')->name('muestratit');

Route::get('/altaciclo','curso@altaciclo');
Route::POST('/guardaciclo','curso@guardaciclo')->name('gcic');
Route::get('/reporteciclo','curso@muestraciclo')->name('muestracic');

Route::get('/altaespecialidades','curso@altaespecialidades')->name('altaespecialidades');
Route::POST('/guardaespecialidad','curso@guardaespecialidad')->name('guardaespecialidad');
Route::get('/reporteespecialidad','curso@muestraespecialidades')->name('muestraesp');

Route::get('/altaalumno','curso@altaalumno')->name('altaal');
Route::POST('/guardalumno','curso@guardalumno')->name('guardaal');
Route::get('/reportealumno','curso@muestraalumnos')->name('muestraalu');









 






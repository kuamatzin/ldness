<?php

use App\Contacto;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('page.intentalo');
});

Route::get('/aplicaciones', function () {
    return view('page.aplicaciones');
});

Route::get('/beneficios', function () {
    return view('page.beneficios');
});

Route::get('/musica', function () {
    return view('page.musica');
});

Route::get('/musico', function () {
    return view('page.musico');
});

Route::get('/registro', function () {
    return view('page.registro');
});



Route::get('/en', function () {
    return view('page.intentalo_en');
});

Route::get('/apps', function () {
    return view('page.aplicaciones_en');
});

Route::get('/benefits', function () {
    return view('page.beneficios_en');
});

Route::get('/music', function () {
    return view('page.musica_en');
});

Route::get('/musician', function () {
    return view('page.musico_en');
});

Route::get('/user', function () {
    return view('page.registro_en');
});

Route::post('/registro', function (Request $request) {
    Contacto::create($request->all());

    return "Exito";
});

Auth::routes();

Route::get('/home', 'HomeController@index');

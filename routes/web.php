<?php

Route::get('/', function () {
    return view('page.aplicaciones');
});

Route::get('/escucha', function () {
    return view('page.intentalo');
});

Route::get('/beneficios', function () {
    return view('page.beneficios');
});

Route::get('/musica', function () {
    return view('page.musica');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

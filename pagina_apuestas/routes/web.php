<?php
/*
plantilla base-inicial
|
*/
Route::get('/edu', function () {
    return view('Plantilla_inicio.Base', ['dato' => 'no']);
});

Route::get('/', 'Inicio\inicio@home');
/*
Detalle de partidas
|
*/
Route::get('detalle/{identificador}', 'Inicio\inicio@detalle_partida');

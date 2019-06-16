<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



//REST GET
Route::get('test.placetopay.com/redirection/listar_pagos', 'PagosController@listar_pagos');
Route::get('test.placetopay.com/redirection/session/pagos/{referencia}', 'RegistroUsuariosController@create');
Route::get('test.placetopay.com/redirection/respuesta/{referencia}', 'PagosController@respuesta_pago');
Route::get('test.placetopay.com/redirection/home', 'RegistroUsuariosController@index');
Route::get('test.placetopay.com/redirection/session/pagos/respuesta_pago/{referencia}', 'PagosController@respuesta_pago');


//REST POST
Route::post('test.placetopay.com/redirection/session/pagos/realizar_pago/{referencia}', 'PagosController@registrar_pagos');
Route::post('test.placetopay.com/redirection/session/pagos/registro_usuarios/{referencia}', 'RegistroUsuariosController@store');

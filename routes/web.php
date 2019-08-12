<?php

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('Usuarios','UserController');
Route::resource('Encuestas','EncuestaController');
Route::post('registrar','EncuestaController@hola');
Route::get('BuscarOrgano/{idMagistrados}','EncuestaController@Buscar');
Route::get('Detalle/{idUsuario}','UserController@detalle');
Route::get('pdf', 'EncuestaController@pdf');

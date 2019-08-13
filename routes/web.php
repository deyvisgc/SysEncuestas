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

Route::group(['middleware' => ['auth','is_admn']], function () {
    //solo el administrador puede dentrar a estas carpetas
    Route::get('Detalle/{idUsuario}','UserController@detalle');
    Route::resource('Usuarios','UserController');
    //
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mensaje', 'HomeController@mensaje')->name('mensaje');
Route::resource('Encuestas','EncuestaController');
Route::post('registrar','EncuestaController@hola');
Route::get('BuscarOrgano/{idMagistrados}','EncuestaController@Buscar');
Route::resource('Perfil','PerfilController');


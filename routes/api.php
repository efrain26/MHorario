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

Route::get('/users/', 'UserController@index');
Route::get('/tipo-usuarios', 'TipoUsuarioController@index');
Route::get('/personas/', 'PersonaController@index');
Route::get('/maestros/', 'MaestroController@index');
Route::get('/maestro/{id}', 'MaestroController@fetch');
Route::get('/materias/', 'MateriaController@index');
Route::get('/materia/{id}', 'MateriaController@fetch');
Route::get('/especialidades/', 'EspecialidadController@index');


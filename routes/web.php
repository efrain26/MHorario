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
/*
Route::get('/', function () {
    return view('app');
});*/

Auth::routes();

Route::view('/', 'App');
Route::view('/gestion', 'App');
Route::view('/gestion/maestros', 'App');
Route::view('/home', 'App');
Route::view('/home/crear', 'App');
Route::view('/home/crear/previewmaterias', 'App');
Route::view('/home/crear/previewmaterias/horariofinal', 'App');




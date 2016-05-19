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


Route::get('setor',['as' => 'setor.index', 'uses' => 'SetorController@index']);
Route::get('cargo',['as' => 'cargo.index', 'uses' => 'CargoController@index']);
Route::get('categoria',['as' => 'categoria.index', 'uses' => 'CategoriaController@index']);
Route::get('vaga',['as' => 'vaga.index', 'uses' => 'VagaController@index']);

Route::auth();

Route::get('/home', 'HomeController@index');

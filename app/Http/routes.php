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



    Route::group(['prefix' => 'admin'], function(){

        Route::group(['prefix' => 'setor'], function(){

            Route::get('/',['as' => 'setor.index', 'uses' => 'SetorController@index']);
            Route::get('cadastrar',['as' => 'setor.cadastrar', 'uses' => 'SetorController@cadastrar']);
            Route::post('store',['as' => 'setor.store', 'uses' => 'SetorController@store']);
            Route::get('{id}/edit',['as' => 'setor.edit', 'uses' => 'SetorController@edit']);
            Route::put('{id}/update', ['as' => 'setor.update', 'uses' => 'SetorController@update']);

        });




        Route::get('cargo',['as' => 'cargo.index', 'uses' => 'CargoController@index']);
        Route::get('categoria',['as' => 'categoria.index', 'uses' => 'CategoriaController@index']);
        Route::get('vaga',['as' => 'vaga.index', 'uses' => 'VagaController@index']);

    });





Route::auth();

Route::get('home', 'HomeController@index');

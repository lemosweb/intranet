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

            Route::get('/',['as' => 'setor.index', 'uses' => 'AdminSetorController@index']);
            Route::get('cadastrar',['as' => 'setor.cadastrar', 'uses' => 'AdminSetorController@cadastrar']);
            Route::post('store',['as' => 'setor.store', 'uses' => 'AdminSetorController@store']);
            Route::get('{id}/edit',['as' => 'setor.edit', 'uses' => 'AdminSetorController@edit']);
            Route::put('{id}/update', ['as' => 'setor.update', 'uses' => 'AdminSetorController@update']);
            Route::get('{id}/destroy',['as' => 'setor.destroy', 'uses' => 'AdminSetorController@destroy']);

        });

        Route::group(['prefix' => 'cargo'], function(){

            Route::get('/',['as' => 'cargo.index', 'uses' => 'AdminCargoController@index']);
            Route::get('cadastrar',['as' => 'cargo.cadastrar', 'uses' => 'AdminCargoController@cadastrar']);
            Route::post('store',['as' => 'cargo.store', 'uses' => 'AdminCargoController@store']);
            Route::get('{id}/edit',['as' => 'cargo.edit', 'uses' => 'AdminCargoController@edit']);
            Route::put('{id}/update', ['as' => 'cargo.update', 'uses' => 'AdminCargoController@update']);
            Route::get('{id}/destroy',['as' => 'cargo.destroy', 'uses' => 'AdminCargoController@destroy']);

        });

        Route::group(['prefix' => 'colaborador'], function(){

            Route::get('/',['as' => 'colaborador.index', 'uses' => 'AdminColaboradorController@index']);
            Route::get('cadastrar',['as' => 'colaborador.cadastrar', 'uses' => 'AdminColaboradorController@cadastrar']);
            Route::post('store',['as' => 'colaborador.store', 'uses' => 'AdminColaboradorController@store']);
            Route::get('{id}/edit',['as' => 'colaborador.edit', 'uses' => 'AdminColaboradorController@edit']);
            Route::put('{id}/update', ['as' => 'colaborador.update', 'uses' => 'AdminColaboradorController@update']);
            Route::get('{id}/destroy',['as' => 'colaborador.destroy', 'uses' => 'AdminColaboradorController@destroy']);

        });





        Route::get('categoria',['as' => 'categoria.index', 'uses' => 'CategoriaController@index']);
        Route::get('vaga',['as' => 'vaga.index', 'uses' => 'VagaController@index']);

    });





Route::auth();

Route::get('home', 'HomeController@index');

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



    Route::group(['prefix' => 'admin'/*, 'middleware' => ['web', 'auth']*/], function(){

        Route::get('/',['as' => 'admin.index', 'uses' => 'AdminController@index']);

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

        Route::group(['prefix' => 'categoria'], function(){

            Route::get('/',['as' => 'categoria.index', 'uses' => 'AdminCategoriaController@index']);
            Route::get('cadastrar',['as' => 'categoria.cadastrar', 'uses' => 'AdminCategoriaController@cadastrar']);
            Route::post('store',['as' => 'categoria.store', 'uses' => 'AdminCategoriaController@store']);
            Route::get('{id}/edit',['as' => 'categoria.edit', 'uses' => 'AdminCategoriaController@edit']);
            Route::put('{id}/update', ['as' => 'categoria.update', 'uses' => 'AdminCategoriaController@update']);
            Route::get('{id}/destroy',['as' => 'categoria.destroy', 'uses' => 'AdminCategoriaController@destroy']);

        });

        Route::group(['prefix' => 'artigo'], function(){

            Route::get('/',['as' => 'artigo.index', 'uses' => 'AdminArtigoController@index']);
            Route::get('cadastrar',['as' => 'artigo.cadastrar', 'uses' => 'AdminArtigoController@cadastrar']);
            Route::post('store',['as' => 'artigo.store', 'uses' => 'AdminArtigoController@store']);
            Route::get('{id}/edit',['as' => 'artigo.edit', 'uses' => 'AdminArtigoController@edit']);
            Route::put('{id}/update', ['as' => 'artigo.update', 'uses' => 'AdminArtigoController@update']);
            Route::get('{id}/destroy',['as' => 'artigo.destroy', 'uses' => 'AdminArtigoController@destroy']);

        });

        Route::group(['prefix' => 'contato'], function(){

            Route::get('/',['as' => 'contato.index', 'uses' => 'AdminContatoController@index']);
            Route::get('cadastrar',['as' => 'contato.cadastrar', 'uses' => 'AdminContatoController@cadastrar']);
            Route::post('store',['as' => 'contato.store', 'uses' => 'AdminContatoController@store']);
            Route::get('{id}/edit',['as' => 'contato.edit', 'uses' => 'AdminContatoController@edit']);
            Route::put('{id}/update', ['as' => 'contato.update', 'uses' => 'AdminContatoController@update']);
            Route::get('{id}/destroy',['as' => 'contato.destroy', 'uses' => 'AdminContatoController@destroy']);

        });

        Route::group(['prefix' => 'vaga'], function(){

            Route::get('/',['as' => 'vaga.index', 'uses' => 'AdminVagaController@index']);
            Route::get('cadastrar',['as' => 'vaga.cadastrar', 'uses' => 'AdminVagaController@cadastrar']);
            Route::post('store',['as' => 'vaga.store', 'uses' => 'AdminVagaController@store']);
            Route::get('{id}/edit',['as' => 'vaga.edit', 'uses' => 'AdminVagaController@edit']);
            Route::put('{id}/update', ['as' => 'vaga.update', 'uses' => 'AdminVagaController@update']);
            Route::get('{id}/destroy',['as' => 'vaga.destroy', 'uses' => 'AdminVagaController@destroy']);

        });








    });





Route::auth();

Route::get('home', 'HomeController@index');

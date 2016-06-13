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



    Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function(){

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
            Route::get('{id}/aprovar',['as' => 'artigo.aprovar', 'uses' => 'AdminArtigoController@aprovar']);
            Route::get('{id}/favorito',['as' => 'artigo.favorito', 'uses' => 'AdminArtigoController@favorito']);

        });


        Route::group(['prefix' => 'images'], function(){

            Route::get('{id}/artigo',['as'=>'images.index', 'uses' => 'AdminImageController@index']);
            Route::get('create/{id}/artigo',['as'=>'images.create', 'uses' => 'AdminImageController@createImage']);
            Route::post('store/{id}/artigo',['as'=>'images.store', 'uses' => 'AdminImageController@storeImage']);
            Route::get('destroy/{id}/artigo',['as'=>'images.destroy', 'uses' => 'AdminImageController@destroyImage']);


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

        Route::group(['prefix' => 'enquete'], function(){

            Route::get('/',['as' => 'enquete.index', 'uses' => 'AdminEnqueteController@index']);
            Route::get('cadastrar',['as' => 'enquete.cadastrar', 'uses' => 'AdminEnqueteController@cadastrar']);
            Route::post('store',['as' => 'enquete.store', 'uses' => 'AdminEnqueteController@store']);
            Route::get('{id}/edit',['as' => 'enquete.edit', 'uses' => 'AdminEnqueteController@edit']);
            Route::put('{id}/update', ['as' => 'enquete.update', 'uses' => 'AdminEnqueteController@update']);
            Route::get('{id}/destroy',['as' => 'enquete.destroy', 'uses' => 'AdminEnqueteController@destroy']);

        });


        Route::group(['prefix' => 'respostas'], function(){

            Route::get('/{id}',['as' => 'respostas.index', 'uses' => 'AdminRespostasController@index']);
            Route::get('{id}/cadastrar',['as' => 'respostas.cadastrar', 'uses' => 'AdminRespostasController@cadastrar']);
            Route::post('{id}/store',['as' => 'respostas.store', 'uses' => 'AdminRespostasController@store']);
            Route::get('{id}/edit',['as' => 'respostas.edit', 'uses' => 'AdminRespostasController@edit']);
            Route::put('{id}/update', ['as' => 'respostas.update', 'uses' => 'AdminRespostasController@update']);
            Route::get('{id}/destroy',['as' => 'respostas.destroy', 'uses' => 'AdminRespostasController@destroy']);

        });


        Route::group(['prefix' => 'enqueteview'], function(){

            Route::get('/',['as' => 'enqueteview.index', 'uses' => 'EnqueteController@index']);
            Route::post('/',['as' => 'enqueteview.store', 'uses' => 'EnqueteController@store']);
            Route::get('{id}/votado',['as' => 'enqueteview.votado', 'uses' => 'EnqueteController@votado']);



        });

        Route::group(['prefix' => 'institucional'], function(){

            Route::get('/',['as' => 'institucional.index', 'uses' => 'AdminInstitucionalController@index']);
            Route::get('{id}/edit',['as' => 'institucional.edit', 'uses' => 'AdminInstitucionalController@edit']);
            Route::put('{id}/update', ['as' => 'institucional.update', 'uses' => 'AdminInstitucionalController@update']);


        });


        Route::group(['prefix' => 'institucional'], function(){

            Route::get('/',['as' => 'institucional.index', 'uses' => 'AdminInstitucionalController@index']);
            Route::get('{id}/edit',['as' => 'institucional.edit', 'uses' => 'AdminInstitucionalController@edit']);
            Route::put('{id}/update', ['as' => 'institucional.update', 'uses' => 'AdminInstitucionalController@update']);


        });

        Route::group(['prefix' => 'politicas'], function(){

            Route::get('/',['as' => 'politicas.index', 'uses' => 'AdminPoliticasController@index']);
            Route::get('cadastrar',['as' => 'politicas.cadastrar', 'uses' => 'AdminPoliticasController@cadastrar']);
            Route::get('{id}/edit',['as' => 'politicas.edit', 'uses' => 'AdminPoliticasController@edit']);
            Route::put('{id}/update', ['as' => 'politicas.update', 'uses' => 'AdminPoliticasController@update']);

        });


    });





Route::auth();

Route::get('home', 'HomeController@index');

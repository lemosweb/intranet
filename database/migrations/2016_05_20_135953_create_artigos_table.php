<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('set foreign_key_checks = 0;');
        Schema::create('artigos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',255);
            $table->text('texto');
            $table->text('foto');
            $table->dateTime('data');
            $table->dateTime('validade');
            $table->boolean('status_aprovacao');

            $table->integer('colaborador_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->integer('setor_id')->unsigned();

            $table->foreign('colaborador_id')->references('id')->on('users');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('setor_id')->references('id')->on('setors');


            $table->timestamps();
        });
        DB::statement('set foreign_key_checks = 1;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('artigos');
    }
}

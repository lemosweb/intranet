<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('set foreign_key_checks = 0;');
        Schema::create('contatos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',255);
            $table->integer('telefone');
            $table->integer('nextel');
            $table->string('empresa');
            $table->string('endereco');

            $table->integer('colaborador_id')->unsigned();
            $table->foreign('colaborador_id')->references('id')->on('users');

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
        Schema::drop('contatos');
    }
}

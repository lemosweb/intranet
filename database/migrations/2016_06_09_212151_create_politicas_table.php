<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('politicas', function (Blueprint $table) {

            $table->increments('id');
            $table->string('titulo');
            $table->string('descricao');
            $table->string('arquivo');
            $table->string('caminho');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('politicas');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*DB::statement('set foreign_key_checks = 0;');*/
        Schema::create('cargos', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nome', 255);
            $table->timestamps();

            $table->integer('setor_id')->unsigned();
            $table->foreign('setor_id')->references('id')->on('setors');

        });
       /*DB::statement('set foreign_key_checks = 1;');*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cargos');
    }
}

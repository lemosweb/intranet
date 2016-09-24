<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('set foreign_key_checks = 0;');
        Schema::create('noticias', function (Blueprint $table) {

            $table->increments('id');
            $table->string('titulo',255);
            $table->text('texto');
            $table->date('data');
            $table->date('validade');
            $table->boolean('status');
            $table->boolean('status_aprovacao')->default(false);
            $table->boolean('favorito');

            $table->integer('user_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->integer('setor_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('categoria_id')->references('id')->on('categoria_noticias')->onDelete('cascade');
            $table->foreign('setor_id')->references('id')->on('setors')->onDelete('cascade');

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
        Schema::drop('noticias');
    }
}

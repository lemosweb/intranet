<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('set foreign_key_checks = 0;');
        Schema::create('respostas', function (Blueprint $table) {

            $table->increments('id');
            $table->string('resposta');

            $table->integer('qtd_respostas')->default(0);
            $table->integer('enquete_id')->unsigned();

            $table->foreign('enquete_id')->references('id')->on('enquetes')->onDelete('cascade');
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
        Schema::drop('respostas');
    }
}

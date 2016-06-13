<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('set foreign_key_checks = 0;');
        Schema::create('enquetes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pergunta');
            $table->string('status');

            $table->date('data_fim');

            $table->integer('user_id')->unsigned();
            $table->integer('setor_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('enquetes');
    }
}

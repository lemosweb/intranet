<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Participantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('set foreign_key_checks = 0;');
        Schema::create('users_enquetes', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::drop('users_respostas');
    }
}

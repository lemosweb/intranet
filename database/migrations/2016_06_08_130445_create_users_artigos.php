<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersArtigos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('set foreign_key_checks = 0;');
        Schema::create('users_artigos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('artigo_id')->unsigned();
            $table->foreign('artigo_id')->references('id')->on('artigos')->onDelete('cascade');

            $table->timestamps();
        });
        DB::statement('set foreign_key_checks = 0;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users_artigos');
    }
}

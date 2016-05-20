<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('set foreign_key_checks = 0;');
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('telefone',15);
            $table->string('foto',255);
            $table->integer('nivel_de_acesso');
            $table->boolean('status');
            $table->integer('cargo_id')->unsigned();
            $table->integer('setor_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('cargo_id')->references('id')->on('cargos');
            $table->foreign('setor_id')->references('id')->on('setors');
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
        Schema::drop('users');
    }
}

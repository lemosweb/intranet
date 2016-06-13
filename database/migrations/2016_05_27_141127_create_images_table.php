<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('set foreign_key_checks = 0;');
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');

            $table->string('extension',5);

            $table->integer('artigo_id')->unsigned();
            $table->foreign('artigo_id')->references('id')->on('artigos')->onDelete('cascade');

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
        Schema::drop('images');
    }
}

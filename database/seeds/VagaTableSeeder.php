<?php

use Illuminate\Database\Seeder;

class VagaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Setor::class, 10)->create();
    }
}

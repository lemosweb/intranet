<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('set foreign_key_checks = 0;');
        $this->call(CategoriaTableSeeder::class);
        $this->call(SetorTableSeeder::class);
        $this->call(CargoTableSeeder::class);
        $this->call(VagaTableSeeder::class);
        DB::statement('set foreign_key_checks = 1;');
    }
}

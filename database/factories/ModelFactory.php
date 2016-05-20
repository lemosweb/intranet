<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Categoria::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->word
    ];
});

$factory->define(App\Setor::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->word
    ];
});

$factory->define(App\Cargo::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->word,
        'setor_id' => $faker->numberBetween(1,5)

    ];
});

$factory->define(App\Vaga::class, function (Faker\Generator $faker) {
    return [
        'status' => $faker->text('aberto'),
        'cargo_id' => $faker->numberBetween(1,10)

    ];
});


<?php

use Faker\Generator as Faker;

$factory->define(App\Prestador::class, function (Faker $faker) {
    return [
        'nit' => $faker->int(20),
        'cedula' => $faker->int(20),
        'usuario_tipo' => $faker->randomNumber(11),
        'contrato_id' => $faker->randomNumber(11),
        'nombre' => $faker->name,
        'apellido' => $faker->lastName,
        'direccion' => $faker->address,
        'barrio_id' => $faker->randomNumber(1),
        'telefono' => $faker->phoneNumber(),
        'genero_id' => $faker->randomNumber(1),
        'profesion_id' => $faker->rand(1, 0),
        // TODO
    ];
});

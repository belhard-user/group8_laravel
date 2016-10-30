<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Testdrive::class, function (Faker\Generator $faker) {
    $date = $faker->dateTimeBetween('-10 years', 'now');
    return [
        'email' => $faker->email,
        'name' => $faker->name,
        'age' => $faker->numberBetween(18, 60),
        'msg' => $faker->text(10000),
        'my_time' => $date,
        'created_at' => $date,
        'updated_at' => $date
    ];
});

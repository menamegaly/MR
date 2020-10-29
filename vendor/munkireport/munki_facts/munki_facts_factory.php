<?php

// Database seeder
// Please visit https://github.com/fzaninotto/Faker for more options

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Munki_facts_model::class, function (Faker\Generator $faker) {

    return [
        'fact_key' => $faker->word(),
        'fact_value' => $faker->text($maxNbChars = 200),
    ];
});

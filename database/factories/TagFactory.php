<?php

use Faker\Generator as Faker;

$factory->define(\App\Model\Tag::class, function (Faker $faker) {
    return [
        'name'=>$faker->colorName
    ];
});

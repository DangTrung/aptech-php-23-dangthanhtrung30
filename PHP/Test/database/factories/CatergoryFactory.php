<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Catergory;
use Faker\Generator as Faker;

$factory->define(Catergory::class, function (Faker $faker) {
    return [
        'name'=>$faker->randomElement(['PC','Laptop','Chuot co day','chuot khong day','ban phim co','mieng lot chuot'])
    ];
});

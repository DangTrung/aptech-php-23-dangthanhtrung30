<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name'=>$faker->randomElement(['PC','Laptop','Chuột có dây','Chuột không Dây','Bàn Phím','Miếng Lót Chuột'])
    ];
});

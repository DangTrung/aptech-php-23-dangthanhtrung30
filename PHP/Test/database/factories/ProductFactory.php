<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\Catergory;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $list_categorrID = Catergory::pluck('id');
    return [
        'name'=>$faker->name(),
        'qty'=>rand(1,10),
        'category_id'=>$faker->randomElement($list_categorrID)
    ];
});

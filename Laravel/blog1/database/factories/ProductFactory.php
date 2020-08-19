<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use App\Category;

$factory->define(Product::class, function (Faker $faker) {
    $list_categoryID = Category::pluck('id');
    return [
        'name'=>$faker->name,
        'qty'=>rand(1,10),
        'category_id'=>$faker->randomElement($list_categoryID),
    ];
});

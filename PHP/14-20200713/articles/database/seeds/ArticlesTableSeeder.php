<?php

use App\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\True_;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker\Factory::create();
        for ($i=0; $i <10 ; $i++) { 
            $title= $faker->sentence(rand(3,6),true);
            $slug = Str::slug($title,"-");
            $description = $faker->text(rand(50,100));
            $content= $faker->text(rand(50,100));
            Article::create([
                'title' => $title,
                'slug' => $slug,
                'description' => $description,
                'content' => $content
            ]);

        }
    }
}

<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        for ($i=0;$i<6;$i++){
            DB::table('articles')->insert([
                'title'=>$faker->text(),
                'decription'=>$faker->text(),
                'content'=>$faker->text()


                ]);
        }
       
    }
}

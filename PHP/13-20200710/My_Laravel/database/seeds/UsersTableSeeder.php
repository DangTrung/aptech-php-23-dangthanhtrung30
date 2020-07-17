<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Faker\Factory::create();
        for ($i=0; $i<10  ; $i++) { 
            DB::table('users')->insert([
                'name' =>$fake->name(),
                'email'=>$fake->safeEmail,
                'password'=>bcrypt('123456')
            ]);
        }
    }
}

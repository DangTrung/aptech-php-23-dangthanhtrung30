<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insirt([
            'name'=> str::random(10),
            'email'=>str::randm(10).'@gmail.com',
            'password'=>Hash::make('password'),
        ]);
    }
}

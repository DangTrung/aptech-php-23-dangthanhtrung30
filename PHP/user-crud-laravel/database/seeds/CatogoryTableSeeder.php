<?php

use Illuminate\Database\Seeder;
use App\Catogory;

class CatogoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Catogory::class, 10)->create();
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Phone;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Phone::class,15)->create();
    }
}

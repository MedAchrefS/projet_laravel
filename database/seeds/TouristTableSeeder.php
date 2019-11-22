<?php

use Illuminate\Database\Seeder;

class TouristTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\tourist::truncate();

        (new Faker\Generator)->seed(123);

        factory(App\tourist::class, 50)->create();
    }
}

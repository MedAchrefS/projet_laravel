<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\places::truncate();

        (new Faker\Generator)->seed(123);

        factory(App\places::class, 50)->create();
    }
}

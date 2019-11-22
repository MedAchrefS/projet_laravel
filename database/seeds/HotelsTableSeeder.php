<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\hotels::truncate();

        (new Faker\Generator)->seed(123);

        factory(App\hotels::class, 50)->create();
    }
}

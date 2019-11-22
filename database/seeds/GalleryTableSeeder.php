<?php

use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\gallery::truncate();

        (new Faker\Generator)->seed(123);

        factory(App\gallery::class, 50)->create();
    }
}

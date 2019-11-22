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
        factory(App\gallery::class, 10)->create()->each(function($gallery){
            $gallery->save();
            });
    }
}

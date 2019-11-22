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

        factory(App\hotels::class, 10)->create()->each(function($hotels){
        $hotels->save();
        });
    }
}

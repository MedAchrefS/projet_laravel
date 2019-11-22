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
        factory(App\tourist::class, 10)->create()->each(function($tourist){
            $tourist->save();
            });
    }
}

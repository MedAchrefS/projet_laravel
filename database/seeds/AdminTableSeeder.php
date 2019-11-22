<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\admin::truncate();

        (new Faker\Generator)->seed(123);

        factory(App\admin::class, 50)->create();
    }
}

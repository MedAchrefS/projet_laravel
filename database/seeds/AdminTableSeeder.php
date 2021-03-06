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
        factory(App\admin::class, 10)->create()->each(function($admin){
            $admin->save();
            });
    }
}

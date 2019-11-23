<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UserTableSeeder::class);
         $this->call(AdminTableSeeder::class);
         $this->call(GalleryTableSeeder::class);
         $this->call(HotelsTableSeeder::class);
         $this->call(PlacesTableSeeder::class);
         $this->call(TouristTableSeeder::class);
         Model::reguard();
    }
}

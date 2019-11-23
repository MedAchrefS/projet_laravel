<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'User')->first();
        $role_admin = Role::where('name', 'Admin')->first();
        $user = new User();
        $user->name = 'Victor';
        $user->email = 'visitor@example.com';
        $user->adresse = 'tunis';
        $user->password = bcrypt('visitor');
        $user->save();

        $user->roles()->attach($role_user);
        $admin = new User();
        $admin->name = 'Alex';
        $admin->email = 'admin@example.com';
        $admin->adresse = 'tunis';
        $admin->password = bcrypt('admin');
        $admin->save();

        $admin->roles()->attach($role_admin);

    }
}

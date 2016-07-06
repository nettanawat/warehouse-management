<?php

use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = new \App\UserRole();
        $superAdmin->role_name = 'super admin';
        $superAdmin->save();

        $admin = new \App\UserRole();
        $admin->role_name = 'admin';
        $admin->save();

        $user = new \App\UserRole();
        $user->role_name = 'user';
        $user->save();
    }
}

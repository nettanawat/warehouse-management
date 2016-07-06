<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'administrator';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('123456');
        $user->user_role_id = 1;
        $user->save();
    }
}

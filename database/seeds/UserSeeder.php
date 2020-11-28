<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'fullName' => 'Super Admin',
            'email' => 'super@mail.com',
            'password' => bcrypt('admin11'),
            'userType' => 'Admin',
            'role_id' => 1,
        ]);
    }
}

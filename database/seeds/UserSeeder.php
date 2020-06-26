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
        App\User::create(array(
            'name' => 'test user',
            'email' => 'user@user.com',
            'password' => bcrypt('user')
        ));

    }
}

<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('name', 'admin')->first();
        $editorRole = Role::where('name', 'editor')->first();

        $admin = User::create(array(
            'name' => 'admin user',
            'email' => 'admin@admin.com',
            'password' => bcrypt('adminadmin'),
        ));

        $editor = User::create(array(
            'name' => 'editor user',
            'email' => 'editor@editor.com',
            'password' => bcrypt('editoreditor'),
        ));

        $admin->roles()->attach($adminRole);
        $editor->roles()->attach($editorRole);

    }
}

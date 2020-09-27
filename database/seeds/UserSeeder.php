<?php

use App\User;
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
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'phone' => '0877621233',
            'address' => 'jl. yang benar',
            'password' => bcrypt('12345678')
        ]);

        $admin->assignRole('admin');

        $admin = User::create([
            'name' => 'Taylor Swift',
            'email' => 'taylor@admin.com',
            'phone' => '0877621233',
            'address' => 'jl. inaja',
            'password' => bcrypt('12345678')
        ]);

        $admin->assignRole('admin');
        $user = User::create([
            'name' => 'user',
            'email' => 'user@role.test',
            'phone' => '09981231',
            'address' => 'jl. mana aja',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole('user');
    }
}

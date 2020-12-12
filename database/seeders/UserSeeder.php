<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'address' => 'St. street ganteng',
            'phone' => '628123123123',
            'role' => 'admin',
            'image_name' => 'default.png'
        ]);
        User::create([
            'name' => 'kasir',
            'email' => 'kasir@gmail.com',
            'username' => 'kasir',
            'password' => Hash::make('kasir'),
            'address' => 'St. street ganteng',
            'phone' => '628123123123',
            'role' => 'kasir',
            'image_name' => 'default.png'
        ]);
    }
}

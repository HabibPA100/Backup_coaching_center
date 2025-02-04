<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
           'name' => 'Student',
           'email' => 'student@gmail.com',
           'password' => bcrypt('11111111'),
           'role' => 'student',
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('11111111'),
            'role' => 'admin',
         ]);
         User::create([
            'name' => 'Parent',
            'email' => 'parent@gmail.com',
            'password' => bcrypt('11111111'),
            'role' => 'parent',
         ]);
         User::create([
            'name' => 'Teacher',
            'email' => 'teacher@gmail.com',
            'password' => bcrypt('11111111'),
            'role' => 'teacher',
         ]);
    }
}

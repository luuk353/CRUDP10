<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'admin' => 1,
                'profilepic' => '1708092040.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'testuser',
                'email' => 'testuser@gmail.com',
                'password' => Hash::make('testuser'),
                'admin' => 0,
                'profilepic' => '1708091270.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'nieuweuser',
                'email' => 'nieuweuser@gmail.com',
                'password' => Hash::make('nieuweuser'),
                'admin' => 0,
                'profilepic' => '1708091072.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'gebruiker',
                'email' => 'gebruiker@gmail.com',
                'password' => Hash::make('gebruiker'),
                'admin' => 0,
                'profilepic' => '1708091135.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

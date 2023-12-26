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
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'testuser',
                'email' => 'testuser@gmail.com',
                'password' => Hash::make('testuser'),
                'admin' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

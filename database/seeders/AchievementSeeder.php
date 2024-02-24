<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('achievements')->insert([
            [
                'name' => 'Welcome',
                'description' => 'Een account aangemaakt'
            ],
            [
                'name' => 'Review',
                'description' => 'Voor het eerst een review geschreven'
            ]
        ]);
    }
}

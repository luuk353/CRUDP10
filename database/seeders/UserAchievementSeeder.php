<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserAchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_achievements')->insert([
            [
                'user_id' => 2,
                'achievement_id' => 1,
                'created_at' => now()
            ],
            [
                'user_id' => 3,
                'achievement_id' => 1,
                'created_at' => now()
            ],
            [
                'user_id' => 2,
                'achievement_id' => 2,
                'created_at' => now()
            ],
            [
                'user_id' => 4,
                'achievement_id' => 1,
                'created_at' => now()
            ]
        ]);
    }
}

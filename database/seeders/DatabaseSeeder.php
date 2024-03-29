<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(HighscoreSeeder::class);
        $this->call(AchievementSeeder::class);
        $this->call(UserAchievementSeeder::class);
    }
}

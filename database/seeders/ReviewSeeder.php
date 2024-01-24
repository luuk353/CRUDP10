<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            'user_id' => '2',
            'titel_review' => 'Beste review man!',
            'beschrijving_review' => 'Dit is de beste review die je ooit zult lezen!',
            'rating' => '5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

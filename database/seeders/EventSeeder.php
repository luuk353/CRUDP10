<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $faker = \Faker\Factory::create();

        DB::table('events')->insert([
            'event_naam' => $faker->sentence(3),
            'event_beschrijving' => $faker->paragraph,
            'event_locatie' => $faker->address,
            'begin_datum' => Carbon::now()->addDays($faker->numberBetween(1, 30)),
            'eind_datum' => Carbon::now()->addDays($faker->numberBetween(31, 60)),
            'begin_tijd' => Carbon::now()->setTimeFromTimeString($faker->time()),
            'eind_tijd' => Carbon::now()->setTimeFromTimeString($faker->time()),
            'event_foto' => $faker->imageUrl(),
            'event_status' => $faker->randomElement(['0', '1', '2']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

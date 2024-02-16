<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'event_naam' => 'De beste event!',
                'event_beschrijving' => 'De beste event ooit in de hele wereld!',
                'event_locatie' => 'Eventstraat 10, 6969 AB, EventStad',
                'begin_datum' => Carbon::now(),
                'eind_datum' => Carbon::now(),
                'begin_tijd' => Carbon::now()->format('H:i'),
                'eind_tijd' => Carbon::now()->format('H:i'),
                'event_foto' => '1708091072.jpg',
                'event_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'event_naam' => 'De tweede beste event!',
                'event_beschrijving' => 'De tweede beste event ooit in de hele wereld!',
                'event_locatie' => 'Tweedeeventstraat 11, 7070 AB, Tweede eventstad',
                'begin_datum' => Carbon::now(),
                'eind_datum' => Carbon::now(),
                'begin_tijd' => Carbon::now()->format('H:i'),
                'eind_tijd' => Carbon::now()->format('H:i'),
                'event_foto' => '1708091687.jpg',
                'event_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

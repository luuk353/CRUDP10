@extends('layouts.main')

@section('content')

<main>
    <div class="min-h-screen bg-gradient-to-l from-emerald-400 via-green-400 to-cyan-600 p-4 max-w-full">
        <div class="w-full mx-auto my-8 px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-800 text-white p-8 rounded-md shadow-md mb-8">
                <img class="w-full h-auto mb-4" src="{{ asset('images/' . $event->event_foto) }}" alt="{{ $event->event_naam }}">
                <h3 class="text-2xl font-bold text-white mb-2">{{ $event->event_naam }}</h3>
                <p class="font-semibold mb-2"><span class="indent-8">Beschrijving: {{ $event->event_beschrijving }}</span></p>
                <p>Locatie van het event: {{$event->event_locatie}}</p>
                <div class="flex">
                    <p class="mr-2">Begint om: {{date('H:i', strtotime($event->begin_tijd))}}</p>
                    <p>{{date('d-m-Y', strtotime($event->begin_datum))}}</p>
                </div>
                <div class="flex">
                    <p class="mr-2">Eindigt op: {{date('H:i', strtotime($event->eind_tijd))}}</p>
                    <p>{{date('d-m-Y', strtotime($event->eind_datum))}}</p>
                </div>
                <div>
                    @if ($event->event_status == 0)
                        <p class="bg-green-400 rounded-md p-2 mt-2 font-semibold">Gaat door</p>
                    @elseif ($event->event_status == 1)
                        <p class="bg-yellow-400 rounded-md p-2 mt-2 font-semibold">Event is bezig</p>
                    @else
                        <p class="bg-red-700 rounded-md p-2 mt-2 font-semibold">Afgelast</p>
                    @endif
                </div>
            </div>
            <div class="mb-8">
                <a href="{{ route('events.index') }}" class="inline-block bg-orange-500 hover:bg-orange-700 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                    Terug naar de index
                </a>
            </div>
        </div>
    </div>
</main>

@endsection

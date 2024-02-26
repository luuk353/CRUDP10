@extends('layouts.main')

@section('content')

<main>
    <div class="min-h-screen bg-gradient-to-l from-emerald-400 via-green-400 to-cyan-600 p-4 max-w-full">
        <div class="text-center text-white font-bold text-4xl mb-8">
            @if($admin)
                <h1>Alle events!</h1>
            @else
                <h1>Welkom bij de events pagina!</h1>
            @endif
        </div>
        <div class="flex justify-center mb-4">
            @if (Auth::user()->admin == 1)
                <a href="{{ route('events.create') }}" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                    Maak een event!
                </a>
            @endif
        </div>
        <div class="flex flex-wrap justify-center mt-6 w-max-full min-h-screen gap-4">
            @foreach ($events as $event)
            <div class="bg-gray-900 h-2/6 w-2/6 text-white rounded-lg p-6">
                <img class="w-full h-auto mb-4" src="{{ asset('storage/images/' . $event->event_foto) }}" alt="{{ $event->event_naam }}">
                <h2 class="text-2xl font-bold text-center">Event naam: {{ $event->event_naam }}</h2>
                <p class="font-bold my-2">Event beschrijving: <span class="indent-8">{{ $event->event_beschrijving }}</span></p>
                <div class="flex">
                    <p class="font-bold mt-4">Begin datum: {{date('d-m-Y', strtotime($event->begin_datum))}}</p>
                    <p class="font-bold mt-4 ml-2">Begin tijd: {{ $event->begin_tijd }}</p>
                </div>
                <div class="flex">
                    <p class="font-bold mt-4">Eind datum: {{date('d-m-Y', strtotime($event->eind_datum))}}</p>
                    <p class="font-bold mt-4 ml-2">Eind tijd: {{ $event->eind_tijd }}</p>
                </div>
                <div class="flex mt-2 flex-wrap">
                    <p class="bg-sky-500 p-2 rounded-md w-auto text-center">
                        <a href="{{ route('events.show', $event->id) }}">Bekijk event</a>
                    </p>
                    @if ($admin)
                        <p class="bg-yellow-500 p-2 rounded-md mx-3 w-auto text-center">
                            <a href="{{ route('events.edit', $event->id) }}">Pas event aan</a>
                        </p>
                        <form action="{{ route('events.destroy', $event->id) }}" method="post"
                            class="bg-red-500 p-2 rounded-md w-auto text-center">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Verwijder event">
                        </form>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>

@endsection

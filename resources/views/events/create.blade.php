@extends('layouts.main')

@section('content')

<main>
    <div class="bg-gradient-to-l from-emerald-400 via-green-400 to-cyan-600 py-8 min-h-screen">
        <div class="max-w-2xl mx-auto my-8 px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold text-white mb-8">Maak een event!</h1>
            <div class="mb-8">
                <a href="{{ route('events.index') }}" class="inline-block bg-orange-500 hover:bg-orange-700 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                    Terug naar de index
                </a>
            </div>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="mb-4 bg-black p-4 rounded text-white">{{$error}}</div>
                @endforeach
            @endif

            <div class="bg-gray-800 p-8 rounded-md shadow-md">
                <form action="{{route('events.store')}}" method="post">
                    @csrf
                    <div class="flex flex-col">
                        <label for="event_naam" class="text-white">Naam event *</label>
                        <input type="text" name="event_naam" id="event_naam" class="bg-white rounded-lg text-black" value="{{old('event_naam')}}" placeholder="Game event!">
                        <label for="event_beschrijving" class="text-white">Beschrijving event *</label>
                        <textarea name="event_beschrijving" id="event_beschrijving" class="bg-white rounded-lg" placeholder="De grootse game event van de wereld!">{{old('event_beschrijving')}}</textarea>
                        <label for="event_locatie" class="text-white">Locatie event *</label>
                        <input type="text" name="event_locatie" id="event_locatie" class="bg-white rounded-lg" value="{{old('event_locatie')}}" placeholder="Schoolstraat 12a, 6969lo, Amsterdam">
                        <label for="begin_datum" class="text-white">Begin datum event</label>
                        <input type="date" name="begin_datum" id="begin_datum" class="bg-white rounded-lg" value="{{ old('begin_datum') }}">
                        <label for="begin_tijd" class="text-white">Begin tijd event</label>
                        <input type="time" name="begin_tijd" id="begin_tijd" class="bg-white rounded-lg" value="{{ old('begin_tijd') }}">
                        <label for="eind_datum" class="text-white">Eind datum event</label>
                        <input type="date" name="eind_datum" id="eind_datum" class="bg-white rounded-lg" value="{{ old('eind_datum') }}">
                        <label for="eind_tijd" class="text-white">Eind tijd event</label>
                        <input type="time" name="eind_tijd" id="eind_tijd" class="bg-white rounded-lg" value="{{ old('eind_tijd') }}">
                        <label for="event_foto" class="text-white">Event foto</label>
                        <input type="file" name="event_foto" id="event_foto" class="bg-white rounded-lg" value="{{old('begin_datum')}}">
                        <label for="event_status" class="text-white">Status event</label>
                        <select name="event_status" id="event_status" class="rounded-lg mb-2">
                            <option value="0">Gaat door</option>
                            <option value="1">Wordt aangepast</option>
                            <option value="2">Afgelast</option>
                        </select>
                        <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:scale-105">Verstuur</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>

@endsection

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
                    <div class="mb-4">
                        <label for="event_naam" class="block text-gray-200 text-sm font-bold mb-2">Naam event *</label>
                        <input type="text" name="event_naam" id="event_naam" class="border rounded w-full py-2 px-3 bg-gray-700 text-white focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200" value="{{old('event_naam')}}" placeholder="Game event!">
                    </div>
                    <div class="mb-4">
                        <label for="event_beschrijving" class="block text-gray-200 text-sm font-bold mb-2">Beschrijving event *</label>
                        <textarea name="event_beschrijving" id="event_beschrijving" class="border rounded w-full py-2 px-3 bg-gray-700 text-white focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200" placeholder="De grootse game event van de wereld!">{{old('event_beschrijving')}}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="event_locatie" class="block text-gray-200 text-sm font-bold mb-2">Locatie event *</label>
                        <input type="text" name="event_locatie" id="event_locatie" class="border rounded w-full py-2 px-3 bg-gray-700 text-white focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200" value="{{old('event_locatie')}}" placeholder="Schoolstraat 12a, 6969lo, Amsterdam">
                    </div>
                    <div class="mb-4">
                        <label for="begin_datum" class="block text-gray-200 text-sm font-bold mb-2e">Begin datum event</label>
                        <input type="date" name="begin_datum" id="begin_datum" class="border rounded w-full py-2 px-3 bg-gray-700 text-white focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200" value="{{ old('begin_datum') }}">
                    </div>
                    <div class="mb-4">
                        <label for="begin_tijd" class="block text-gray-200 text-sm font-bold mb-2">Begin tijd event</label>
                        <input type="time" name="begin_tijd" id="begin_tijd" class="border rounded w-full py-2 px-3 bg-gray-700 text-white focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200" value="{{ old('begin_tijd') }}">
                    </div>
                    <div class="mb-4">
                        <label for="eind_datum" class="block text-gray-200 text-sm font-bold mb-2">Eind datum event</label>
                        <input type="date" name="eind_datum" id="eind_datum" class="border rounded w-full py-2 px-3 bg-gray-700 text-white focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200" value="{{ old('eind_datum') }}">
                    </div>
                    <div class="mb-4">
                        <label for="eind_tijd" class="block text-gray-200 text-sm font-bold mb-2">Eind tijd event</label>
                        <input type="time" name="eind_tijd" id="eind_tijd" class="border rounded w-full py-2 px-3 bg-gray-700 text-white focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200" value="{{ old('eind_tijd') }}">
                    </div>
                    <div class="mb-4">
                        <label for="event_foto" class="block text-gray-200 text-sm font-bold mb-2">Event foto</label>
                        <input type="file" name="event_foto" id="event_foto" class="border rounded w-full py-2 px-3 bg-gray-700 text-white focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200" value="{{old('begin_datum')}}">
                    </div>
                    <div class="mb-4">
                        <label for="event_status" class="block text-gray-200 text-sm font-bold mb-2e">Status event</label>
                        <select name="event_status" id="event_status" class="border rounded w-full py-2 px-3 bg-gray-700 text-white focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200">
                            <option value="0">Gaat door</option>
                            <option value="1">Wordt aangepast</option>
                            <option value="2">Afgelast</option>
                        </select>
                    </div>
                    <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:scale-105">Verstuur</button>
                </form>
            </div>
        </div>
    </div>

</main>

@endsection

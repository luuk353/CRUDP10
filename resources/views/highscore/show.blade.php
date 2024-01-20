@extends('layouts.main')

@section('content')

<main>
    <div class="min-h-screen bg-gradient-to-l from-fuchsia-800 via-indigo-700 to-blue-600 p-8">
        <div class="w-full mx-auto my-8 px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-800 text-white p-8 rounded-md shadow-md mb-8">
                <p class="text-lg mb-4">Score: {{$highscore->score}}</p>
                <p class="text-lg mb-4">Gepbuliceerd op: {{$highscore->created_at->format('H:i, d-m-Y')}}</p>
                <p class="text-xl mb-4 text-yellow-400 font-bold">User: {{$highscore->user->name}}</p>
            </div>

            <div class="mb-8">
                <a href="{{ route('highscore.index') }}" class="inline-block bg-fuchsia-500 hover:bg-fuchsia-700 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                    Terug naar de index
                </a>
            </div>
        </div>
    </div>
    </div>
</main>

@endsection

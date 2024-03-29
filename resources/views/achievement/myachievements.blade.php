@extends('layouts.main')

@section('content')
    <main>
        <div class="min-h-screen bg-gradient-to-l from-red-600 via-orange-400 to-yellow-200 p-8">
            <div class="text-white font-bold text-5xl text-center mb-8">
                Mijn achievements!
            </div>
            <div class="flex justify-center mb-4">
                <a href="{{ route('achievements.index') }}" class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                    Terug naar de index
                </a>
            </div>
            <div>
                @foreach($user_achievements as $user_achievement)
                    <div class="flex flex-wrap justify-center mt-6 w-auto">
                        <div class="bg-gray-900 h-2/5 w-4/5 text-white rounded-lg p-6">
                            <h2 class="text-2xl font-bold text-center">Naam achievement: {{ $user_achievement->achievement->name }}</h2>
                            <p class="font-bold my-2">Beschrijving achievement: <span class="indent-8">{{ $user_achievement->achievement->description }}</span></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection

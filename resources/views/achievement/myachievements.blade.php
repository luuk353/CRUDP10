@extends('layouts.main')

@section('content')
    <main>
        <div class="min-h-screen bg-gradient-to-l from-yellow-200 via-orange-400 to-red-600 p-8">
            <div class="text-white font-bold text-5xl text-center mb-8">
                Mijn achievements!
            </div>
            <div class="flex justify-center mb-4">
                <a href="{{ route('achievements.index') }}" class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                    Terug naar de index
                </a>
            </div>
        </div>
    </main>
@endsection

@extends('layouts.main')

@section('content')
    <main class="min-h-screen bg-gradient-to-l from-yellow-200 via-orange-400 to-red-600 p-8">
        <div class="text-white font-bold text-5xl text-center mb-8">
            Welkom bij de achievement pagina!
        </div>
        <div class="flex justify-center mb-4">
            @if (Auth::user()->admin == 1)
                <a href="{{ route('achievements.create') }}" class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                    Voeg een achievement toe!
                </a>
            @endif
        </div>
    </main>
@endsection
FF8A4C

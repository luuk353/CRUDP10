@extends('layouts.main')

@section('content')
    <main>
        <div class="bg-gradient-to-l from-fuchsia-800 via-indigo-700 to-blue-600 py-8 h-screen">
            <div class="max-w-2xl mx-auto my-8 px-4 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-extrabold text-white mb-8">Pas je highscore!</h1>
                <div class="mb-8">
                    <a href="{{ route('highscore.index') }}" class="inline-block bg-fuchsia-500 hover:bg-fuchsia-600 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                        Terug naar de index
                    </a>
                </div>

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="mb-4 bg-black p-4 rounded text-white">{{$error}}</div>
                    @endforeach
                @endif

                <div class="bg-gray-800 p-8 rounded-md shadow-md">
                    <form action="{{ route('highscore.update', $highscore->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="score" class="block text-gray-200 text-sm font-bold mb-2">Score *</label>
                            <input type="number" name="score" min="0" class="border rounded w-full py-2 px-3 bg-gray-700 text-white focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200" value="{{old('schore', $highscore->score)}}">
                        </div>
                        <button type="submit" class="bg-fuchsia-500 hover:bg-fuchsia-600 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:scale-105">Verstuur</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

@extends('layouts.main')

@section('content')
    <main>
        <div class="bg-gradient-to-l from-red-600 via-orange-400 to-yellow-200 p-8 min-h-screen">
            <div class="max-w-2xl mx-auto my-8 px-4 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-extrabold text-white mb-8">Maak een achievement!</h1>
                <div class="mb-8">
                    <a href="{{ route('achievements.index') }}" class="inline-block bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                        Terug naar de index
                    </a>
                </div>

                @if (session('success'))
                    <div class="mb-4 bg-green-500 p-4 rounded text-white">
                        {{session('success')}}
                    </div>
                @endif

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="mb-4 bg-black p-4 rounded text-white">{{$error}}</div>
                    @endforeach
                @endif

                <div class="bg-gray-800 p-8 rounded-md shadow-md">
                    <form action="{{ route('achievements.store') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-200 text-sm font-bold mb-2">Naam achievement *</label>
                            <input type="text" name="name" class="border rounded w-full py-2 px-3 bg-gray-700 text-white focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200" value="{{old('titel_review')}}">
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-gray-200 text-sm font-bold mb-2">Beschrijving achievement *</label>
                            <textarea name="description" class="border rounded w-full py-2 px-3 bg-gray-700 text-white resize-none focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200" value="{{old('beschrijving_review')}}"></textarea>
                        </div>
                        <button type="submit" class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:scale-105">Verstuur</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

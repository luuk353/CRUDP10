@extends('layouts.main')

@section('content')

<main>
    <div class="bg-gradient-to-l from-purple-800 via-pink-700 to-red-600 py-8 h-screen">
        <div class="max-w-4xl mx-auto my-8 px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold text-white mb-8">Welcome to the Reviews Page!</h1>

            <div class="mb-8">
                <a href="{{ route('reviews.create') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                    Schrijf een review!
                </a>
            </div>

            @foreach ($reviews as $review)
                <div class="bg-gray-900 rounded-lg shadow-md p-6 mb-8">
                    <h2 class="text-2xl font-semibold text-white mb-2">{{$review->titel_review}}</h2>
                    <p class="text-gray-400">{{$review->beschrijving_review}}</p>
                    <p class="text-yellow-400 font-bold mt-4">Rating: {{$review->rating}}</p>
                    <p class="text-blue-400 font-bold mt-2">Gebruiker: {{$review->user->name}}</p>
                </div>
            @endforeach
        </div>
    </div>
</main>

@endsection

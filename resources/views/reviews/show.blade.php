@extends('layouts.main')

@section('content')
<main>
    <div class="bg-gradient-to-l from-purple-800 via-pink-700 to-red-600 py-8 h-screen">
        <div class="max-w-4xl mx-auto my-8 px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-800 text-white p-8 rounded-md shadow-md mb-8">
                <h1 class="text-3xl font-bold mb-4">{{$review->titel_review}}</h1>
                <p class="text-lg mb-4">{{$review->beschrijving_review}}</p>
                <p class="text-xl mb-4">Rating: {{$review->rating}}</p>
                <p class="text-lg mb-4">Gebruiker: {{$review->user->name}}</p>
                <p class="text-sm mb-4">Geplaatst op: {{$review->created_at}}</p>
                <p class="text-sm">Laatst bijgewerkt op: {{$review->updated_at}}</p>
            </div>

            <div class="mb-8">
                <a href="{{ route('reviews.index') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                    Terug naar de index
                </a>
            </div>
        </div>
    </div>
</main>
@endsection

@extends('layouts.main')

@section('content')

<main>
    {{-- <div class="bg-gradient-to-l from-purple-800 via-pink-700 to-red-600 py-8 min-h-screen w-max-full">
        <div class="w-full mx-auto my-8 px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold text-white mb-8">Welcome to the Reviews Page!</h1>

            <div class="mb-8">
                <a href="{{ route('reviews.create') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                    Schrijf een review!
                </a>
            </div>

            @foreach ($reviews as $review)
                <div class="bg-gray-900 rounded-lg shadow-md p-6 mb-8 max-w-10xl">
                    <h2 class="text-2xl font-semibold text-white mb-2">{{$review->titel_review}}</h2>
                    <p class="text-gray-400">{{$review->beschrijving_review}}</p>
                    <p class="text-yellow-400 font-bold mt-4">Rating: {{$review->rating}}</p>
                    <p class="text-blue-400 font-bold mt-2 mb-2">Gebruiker: {{$review->user->name}}</p>
                    <p class="inline-block mr-1 bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                        <a href="{{ route('reviews.show', $review->id) }}">
                            Bekijk review
                        </a>
                    </p>
                    <p class="inline-block mx-1 bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                        <a href="{{route('reviews.edit', $review->id)}}" >
                            Bewerk review
                        </a>
                    </p>
                    <form action="{{ route('reviews.destroy', $review->id) }}" method="post" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="bg-red-500 hover:bg-red-700 mx-1 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105" value="Verwijder review">
                    </form>
                </div>
            @endforeach
        </div>
    </div> --}}
    <div class="min-h-screen bg-gradient-to-l from-purple-800 via-pink-700 to-red-600 p-4 max-w-full">
        <div class="text-white font-bold text-4xl text-center">
            <h1>Welkom bij de reviews pagina!</h1>
        </div>
        <div class="text-white my-2 p-4 bg-sky-500 w-1/5 text-center rounded-lg">
            <a href="{{route('reviews.create')}}">Schrijf een review</a>
        </div>
        @foreach ($reviews as $review)
        <div class="flex flex-wrap justify-center mt-6 w-auto">
            <div class="bg-gray-900 h-2/5 w-4/5 text-white rounded-lg p-6">
                <h2 class="text-2xl font-bold text-center">Titel: {{$review->titel_review}}</h2>
                <p class="font-bold my-2">Beschrijving: <span class="indent-8">{{$review->beschrijving_review}}</span></p>
                <p class="font-bold my-2 text-yellow-300">Rating: {{$review->rating}}</p>
                <p>Geschreven door: <span class="text-sky-300">{{$review->user->name}}</span></p>
                <div class="flex mt-2 flex-wrap">
                    <p class="bg-sky-500 p-2 rounded-md w-auto text-center"><a href="{{route('reviews.show', $review->id)}}">Bekijk review</a></p>
                    <p class="bg-yellow-500 p-2 rounded-md mx-3 w-auto text-center"><a href="{{route('reviews.edit', $review->id)}}">Pas review aan</a></p>
                    <form action="{{route('reviews.destroy', $review->id)}}" method="post" class="bg-red-500 p-2 rounded-md w-auto text-center">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Verwijder review">
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</main>

@endsection

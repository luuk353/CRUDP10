@extends('layouts.main')

@section('content')

<main>
    <div class="min-h-screen bg-gradient-to-l from-purple-800 via-pink-700 to-red-600 p-4 max-w-full">
        <div class="text-white font-bold text-4xl text-center mb-8">
            <h1>Welkom bij de reviews pagina!</h1>
        </div>
        <div class="flex justify-center mb-4">
            @if (!Auth::user()->admin == 1)
                <a href="{{ route('reviews.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                    Schrijf een review!
                </a>
            @endif
        </div>
        @include('components.flash')
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
        <div class="mt-4">
            {{ $reviews->links() }}
        </div>
    </div>
</main>

@endsection

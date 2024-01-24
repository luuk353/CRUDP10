@extends('layouts.main')

@section('content')

<main>
    <div class="min-h-screen bg-gradient-to-l from-purple-800 via-pink-700 to-red-600 p-4 max-w-full">
        <div class="text-white font-bold text-4xl text-center">
            <h1>Reviews van klanten!</h1>
        </div>
        @foreach ($reviews as $review)
        <div class="flex flex-wrap justify-center mt-6 w-auto">
            <div class="bg-gray-900 h-2/5 w-4/5 text-white rounded-lg p-6">
                <h2 class="text-2xl font-bold text-center">Titel: {{$review->titel_review}}</h2>
                <p class="font-bold my-2">Beschrijving: <span class="indent-8">{{$review->beschrijving_review}}</span></p>
                <p class="font-bold my-2 text-yellow-300">Rating: {{$review->rating}}</p>
                <p>Geschreven door: <span class="text-sky-300">{{$review->user->name}}</span></p>
                <div class="flex mt-2 flex-wrap">
                    <form action="{{route('reviews.destroy', $review->id)}}" method="post" class="bg-red-500 p-2 rounded-md w-auto text">
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

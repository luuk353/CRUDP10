@extends('layouts.main')

@section('content')
<main>
    <div class="bg-gradient-to-l from-purple-800 via-pink-700 to-red-600 py-8 h-screen">
        <div class="max-w-4xl mx-auto my-8 px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold text-white mb-8">Schrijf een review!</h1>
            <div class="mb-8">
                <a href="{{ route('reviews.index') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                    Terug naar de index
                </a>
            </div>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="mb-4 bg-blue-500 p-4 rounded text-white">{{$error}}</div>
                @endforeach
            @endif

            <div class="flex justify-center items-center">
                <form action="{{ route('reviews.store') }}" method="post" class="w-full">
                    @csrf

                    <label for="titel_review" class="block text-gray-200 text-sm font-bold mb-2">Titel review *</label>
                    <input type="text" name="titel_review" class="border rounded w-full py-2 px-3 mb-2 bg-gray-800 text-white">

                    <label for="beschrijving_review" class="block text-gray-200 text-sm font-bold mb-2">Beschrijving review *</label>
                    <input type="text" name="beschrijving_review" class="border rounded w-full py-2 px-3 mb-2 bg-gray-800 text-white">

                    <label for="rating" class="block text-gray-200 text-sm font-bold mb-2">Rating *</label>
                    <input type="number" name="rating" step="0.1" min="0" max="5" class="border rounded w-full py-2 px-3 mb-4 bg-gray-800 text-white">

                    <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:scale-105" value="Verstuur">
                </form>
            </div>
        </div>
    </div>
</main>
@endsection

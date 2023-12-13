@extends('layouts.main')

@section('content')
<main>
    <div class="bg-gradient-to-l from-purple-800 via-pink-700 to-red-600 py-8 h-screen">
        <div class="max-w-4xl mx-auto my-8 px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-800 text-white p-8 rounded-md shadow-md mb-8">
                <h1 class="text-3xl font-bold mb-4">Bewerk de review</h1>
                <form action="{{ route('reviews.update', $review->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="title_review" class="block text-gray-200 text-sm font-bold mb-2">Titel review *</label>
                        <input type="text" name="titel_review" class="border rounded w-full py-2 px-3 mb-2 bg-gray-800 text-white focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200" placeholder="{{$review->titel_review}}">
                    </div>
                    <div class="mb-4">
                        <label for="beschrijving_review" class="block text-gray-200 text-sm font-bold mb-2">Beschrijving review *</label>
                        <textarea name="beschrijving_review" class="border rounded w-full py-2 px-3 mb-2 bg-gray-800 text-white resize-none focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200" placeholder="{{ $review->beschrijving_review }}"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="rating" class="block text-gray-200 text-sm font-bold mb-2">Rating *</label>
                        <input type="number" name="rating" step="0.1" min="0" max="5" class="border rounded w-full py-2 px-3 mb-4 bg-gray-800 text-white focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200" placeholder="{{ $review->rating }}">
                    </div>
                    <div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:scale-105">Bijwerken</button>
                        <a href="{{ route('reviews.show', $review->id) }}" class="ml-4 inline-block bg-gray-600 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:scale-105">Annuleren</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection

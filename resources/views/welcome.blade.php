@extends('layouts.main')

@section('content')
    <main>
        <div class="min-h-screen">
            <section class="flex justify-center p-6 bg-gray-400">
                <img class="bg-auto" src="{{ asset('images/main-screen.png') }}" alt="">
            </section>
            <div class="text-center bg-white p-6">
                <h1 class="text-blue-600 text-8xl mb-10">Welkom bij potion panic</h1>
                <div class="flex justify-between text-center text-white">
                    <div class="bg-gradient-to-b from-green-800 via-green-700 to-green-600 w-1/4 p-4">
                        <p>blok1</p>
                    </div>
                    <div class="bg-gradient-to-b from-yellow-800 via-yellow-700 to-yellow-600 w-1/4 p-4">
                        <p>blok2</p>
                    </div>
                    <div class="bg-gradient-to-b from-purple-800 via-purple-700 to-purple-600 w-1/4 p-4">
                        <p>blok3</p>
                    </div>
                    <div class="bg-gradient-to-b from-red-800 via-red-700 to-red-600 w-1/4 p-4">
                        <p>blok4</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="blok1" class="min-h-screen bg-gradient-to-b from-green-800 via-green-700 to-green-600 text-white p-4">
            <h2>Doei</h2>
        </div>
        <div id="blok2" class="min-h-screen bg-gradient-to-b from-yellow-800 via-yellow-700 to-yellow-600 text-white p-4">
            <h2>los</h2>
        </div>
        <div id="blok3" class="min-h-screen bg-gradient-to-b from-purple-800 via-purple-700 to-purple-600 text-white p-4">
            <h2>los</h2>
        </div>
        <div id="reviews" class="min-h-screen bg-gradient-to-b from-red-800 via-red-700 to-red-600 text-white p-4">
            <div class="text-center">
                <h2 class="text-4xl font-extrabold mb-8">Reviews van klanten!</h2>
            </div>
            <div class="flex justify-center flex-wrap gap-8 max-w-full">
                @foreach ($reviews as $review)
                    <div class="w-2/5 p-6 bg-gray-800 rounded-lg shadow-xl hover:shadow-2xl transform hover:scale-105 transition duration-300">
                        <h3 class="text-2xl font-bold text-white mb-4">{{ $review->titel_review }}</h3>
                        <p class="text-gray-300"><span class="indent-8">{{ $review->beschrijving_review }}</span></p>
                        <div class="flex items-center justify-between mt-6">
                            <div class="flex items-center">
                                <svg class="text-yellow-400 w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 13l4 4L19 7"></path>
                                </svg>
                                <p class="text-yellow-400 font-bold">Rating: {{ $review->rating }}</p>
                            </div>
                        </div>
                        <div class="mt-4 text-white text-left">
                            @if($review->user)
                                <span class="text-green-500">Door:</span> {{ $review->user->name }}
                            @else
                                <span class="text-gray-500">Anonieme Gebruiker</span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection

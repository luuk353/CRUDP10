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
                        <p><a href="#achievements">Achievements</a></p>
                    </div>
                    <div class="bg-gradient-to-b from-yellow-800 via-yellow-700 to-yellow-600 w-1/4 p-4">
                        <p><a href="#highscores">Highscores</a></p>
                    </div>
                    <div class="bg-gradient-to-b from-purple-800 via-purple-700 to-purple-600 w-1/4 p-4">
                        <p><a href="#events">Events</a></p>
                    </div>
                    <div class="bg-gradient-to-b from-red-800 via-red-700 to-red-600 w-1/4 p-4">
                        <p><a href="#reviews">Reviews</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="achievements" class="min-h-screen bg-gradient-to-b from-green-800 via-green-700 to-green-600 text-white p-4">
            @if(Auth::user())
                @if(Auth::user()->admin == 1)
                    <div class="text-center mb-8">
                        <h2 class="text-4xl font-extrabold mb-8">Higscores van Panic Potion!</h2>
                        <a href="{{route('achievements.create')}}" class="bg-gray-800 p-4 rounded-md hover:bg-gray-500 duration-300">Voeg je higscore toe!</a>
                    </div>
                @else
                    <div class="text-center mb-8">
                        <h2 class="text-4xl font-extrabold mb-8">Higscores van Panic Potion!</h2>
                    </div>
                @endif
            @else
                <div class="text-center mb-8">
                    <h2 class="text-4xl font-extrabold mb-8">Higscores van Panic Potion!</h2>
                </div>
            @endif
            <div class="flex justify-center flex-wrap gap-8 max-w-full">
                @foreach ($achievements as $achievement)
                    <div class="w-2/5 p-6 bg-gray-800 rounded-lg shadow-xl hover:shadow-2xl transform hover:scale-105 transition duration-300">
                        <h3 class="text-2xl font-bold text-white mb-4">{{ $achievement->name }}</h3>
                        <p class="text-gray-300"><span class="indent-8">{{ $achievement->description }}</span></p>
                    </div>
                @endforeach
            </div>
        </div>
        <div id="highscores" class="min-h-screen bg-gradient-to-b from-yellow-800 via-yellow-700 to-yellow-600 text-white p-4 max-w-full">
            @if(Auth::user())
                @if(Auth::user()->admin == 1)
                    <div class="text-center mb-8">
                        <h2 class="text-4xl font-extrabold mb-8">Higscores van Panic Potion!</h2>
                    </div>
                @else
                    <div class="text-center mb-8">
                        <h2 class="text-4xl font-extrabold mb-8">Higscores van Panic Potion!</h2>
                        <a href="{{route('highscore.create')}}" class="bg-gray-800 p-4 rounded-md hover:bg-gray-500 duration-300">Voeg je higscore toe!</a>
                    </div>
                @endif
            @else
                <div class="text-center mb-8">
                    <h2 class="text-4xl font-extrabold mb-8">Higscores van Panic Potion!</h2>
                </div>
            @endif
            <div class="flex justify-center flex-wrap">
                <div class="shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            Highscores
                            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Bekijk een lijst met highscores</p>
                        </caption>
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Score
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Speler
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($highscores as $highscore)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $highscore->score }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $highscore->user->name }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="events" class="min-h-screen bg-gradient-to-b from-purple-800 via-purple-700 to-purple-600 text-white p-4">
            @if(Auth::user())
                @if(Auth::user()->admin == 1)
                    <div class="text-center mb-8">
                        <h2 class="text-4xl font-extrabold mb-8">Events van Panic Potion!</h2>
                        <a href="{{route('events.create')}}" class="bg-gray-800 p-4 rounded-md hover:bg-gray-500 duration-300">Voeg een event toe!</a>
                    </div>
                @else
                    <div class="text-center mb-8">
                        <h2 class="text-4xl font-extrabold mb-8">Events van Panic Potion!</h2>
                    </div>
                @endif
            @else
                <div class="text-center mb-8">
                    <h2 class="text-4xl font-extrabold mb-8">Events van Panic Potion!</h2>
                </div>
            @endif
            <div class="flex justify-center flex-wrap gap-8 max-w-full">
                @foreach ($events as $event)
                    <div class="w-2/6 p-3 h-1/4 bg-gray-800 rounded-lg shadow-xl hover:shadow-2xl transform hover:scale-105 transition duration-300">
                        <img class="w-full h-auto mb-4" src="{{ asset('storage/images/' . $event->event_foto) }}" alt="{{ $event->event_naam }}">
                        <h3 class="text-2xl font-bold text-white mb-2">{{ $event->event_naam }}</h3>
                        <p class="font-semibold mb-2"><span class="indent-8">Beschrijving: {{ $event->event_beschrijving }}</span></p>
                        <p>Locatie van het event: {{$event->event_locatie}}</p>
                        <div class="flex">
                            <p class="mr-2">Begint om: {{date('H:i', strtotime($event->begin_tijd))}}</p>
                            <p>{{date('d-m-Y', strtotime($event->begin_datum))}}</p>
                        </div>
                        <div class="flex">
                            <p class="mr-2">Eindigt op: {{date('H:i', strtotime($event->eind_tijd))}}</p>
                            <p>{{date('d-m-Y', strtotime($event->eind_datum))}}</p>
                        </div>
                        <div>
                            @if ($event->event_status == 0)
                                <p class="bg-green-400 rounded-md p-2 mt-2 font-semibold">Gaat door</p>
                            @elseif ($event->event_status == 1)
                                <p class="bg-yellow-400 rounded-md p-2 mt-2 font-semibold">Event is bezig</p>
                            @else
                                <p class="bg-red-700 rounded-md p-2 mt-2 font-semibold">Afgelast</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div id="reviews" class="min-h-screen bg-gradient-to-b from-red-800 via-red-700 to-red-600 text-white p-4">
            @if(Auth::user())
                @if(Auth::user()->admin == 1)
                    <div class="text-center mb-8">
                        <h2 class="text-4xl font-extrabold mb-8">Reviews van Panic Potion!</h2>
                    </div>
                @else
                    <div class="text-center mb-8">
                        <h2 class="text-4xl font-extrabold mb-8">Reviews van Panic Potion!</h2>
                        <a href="{{route('reviews.create')}}" class="bg-gray-800 p-4 rounded-md hover:bg-gray-500 duration-300">Schrijf een review!</a>
                    </div>
                @endif
            @else
                <div class="text-center mb-8">
                    <h2 class="text-4xl font-extrabold mb-8">Reviews van Panic Potion!</h2>
                </div>
            @endif
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

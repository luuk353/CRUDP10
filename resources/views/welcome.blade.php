<x-main-layout class="p-0">
    <div class="h-screen">
        <section class="flex justify-center bg-gray-400 p-6">
            <img class="bg-auto" src="{{ asset('images/main-screen.png') }}" alt="">
        </section>
        <div class="bg-white p-6 text-center">
            <h1 class="mb-10 text-8xl text-blue-600">Welkom bij potion panic</h1>
            <div class="flex justify-between text-center text-white">
                <div class="w-1/4 bg-gradient-to-b from-green-800 via-green-700 to-green-600 p-4">
                    <p><a href="#achievements">Achievements</a></p>
                </div>
                <div class="w-1/4 bg-gradient-to-b from-yellow-800 via-yellow-700 to-yellow-600 p-4">
                    <p><a href="#highscores">Highscores</a></p>
                </div>
                <div class="w-1/4 bg-gradient-to-b from-purple-800 via-purple-700 to-purple-600 p-4">
                    <p><a href="#events">Events</a></p>
                </div>
                <div class="w-1/4 bg-gradient-to-b from-red-800 via-red-700 to-red-600 p-4">
                    <p><a href="#reviews">Reviews</a></p>
                </div>
            </div>
        </div>
    </div>
    <x-landingpage.hero id="achievements" class="from-green-800 via-green-700 to-green-600">
        @if (Auth::user())
            @if (Auth::user()->admin == 1)
                <x-landingpage.tekst>
                    Achievements van Panic Potion!
                </x-landingpage.tekst>
                <x-landingpage.box-link href=/achievements/create class="bg-yellow-300 hover:bg-emerald-600">
                    Voeg een nieuwe achievement toe!
                </x-landingpage.box-link>
            @else
                <x-landingpage.tekst>
                    Achievements van Panic Potion!
                </x-landingpage.tekst>
            @endif
        @else
            <x-landingpage.tekst>
                Achievements van Panic Potion!
            </x-landingpage.tekst>
        @endif
        <div class="flex max-w-full flex-wrap justify-center gap-8">
            @if ($achievements->count() > 0)
                @foreach ($achievements as $achievement)
                    <x-landingpage.card class="border-2">
                        <h3 class="mb-4 text-2xl font-bold text-white">{{ $achievement->name }}</h3>
                        <p class="text-gray-300">
                            <span class="indent-8">{{ $achievement->description }}</span>
                        </p>
                    </x-landingpage.card>
                @endforeach
            @else
                <h2>Er zijn nog geen achievements!</h2>
            @endif
        </div>
    </x-landingpage.hero>
    <x-landingpage.hero id="highscores" class="from-yellow-800 via-yellow-700 to-yellow-600">
        @if (Auth::user())
            @if (Auth::user()->admin == 1)
                <x-landingpage.tekst>
                    Higscores van Panic Potion!
                </x-landingpage.tekst>
            @else
                <x-landingpage.tekst>
                    Higscores van Panic Potion!
                </x-landingpage.tekst>
                <x-landingpage.box-link href=/highscore/create class="bg-teal-400 hover:bg-pink-700">
                    Voeg je highscore toe!
                </x-landingpage.box-link>
            @endif
        @else
            <x-landingpage.tekst>
                Higscores van Panic Potion!
            </x-landingpage.tekst>
        @endif
        <div class="flex flex-wrap justify-center">
            <div class="shadow-md sm:rounded-lg">
                <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
                    <caption
                        class="bg-white p-5 text-left text-lg font-semibold text-gray-900 rtl:text-right dark:bg-gray-800 dark:text-white">
                        Highscores
                        <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Bekijk een lijst met
                            highscores</p>
                    </caption>
                    <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
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
                        @if (!$highscores->count() > 0)
                            <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                                <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                    Er zijn nog geen highscores toegevoegd!</td>
                                <td>Er is nog geen speler!</td>
                            </tr>
                        @else
                            @foreach ($highscores as $highscore)
                                <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                        {{ $highscore->score }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $highscore->user->name }}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </x-landingpage.hero>
    <x-landingpage.hero id="events" class="from-purple-800 via-purple-700 to-purple-600">
        @if (Auth::user())
            @if (Auth::user()->admin == 1)
                <x-landingpage.tekst>
                    Events van Panic Potion!
                </x-landingpage.tekst>
                <x-landingpage.box-link href=/events/create class="bg-sky-500 hover:bg-white hover:text-black">
                    Voeg een event toe!
                </x-landingpage.box-link>
            @else
                <x-landingpage.tekst>
                    Events van Panic Potion!
                </x-landingpage.tekst>
            @endif
        @else
            <x-landingpage.tekst>
                Events van Panic Potion!
            </x-landingpage.tekst>
        @endif
        <div class="flex max-w-full flex-wrap justify-center gap-8">
            @if ($events->count() > 0)
                @foreach ($events as $event)
                    <x-landingpage.card class="border-2">
                        <img class="mb-4 h-auto w-full" src="{{ asset('storage/images/' . $event->event_foto) }}"
                            alt="{{ $event->event_naam }}">
                        <h3 class="mb-2 text-2xl font-bold text-white">{{ $event->event_naam }}</h3>
                        <p class="mb-2 font-semibold"><span class="indent-8">Beschrijving:
                                {{ $event->event_beschrijving }}</span></p>
                        <p>Locatie van het event: {{ $event->event_locatie }}</p>
                        <div class="flex">
                            <p class="mr-2">Begint om: {{ date('H:i', strtotime($event->begin_tijd)) }}</p>
                            <p>{{ date('d-m-Y', strtotime($event->begin_datum)) }}</p>
                        </div>
                        <div class="flex">
                            <p class="mr-2">Eindigt op: {{ date('H:i', strtotime($event->eind_tijd)) }}</p>
                            <p>{{ date('d-m-Y', strtotime($event->eind_datum)) }}</p>
                        </div>
                        <div>
                            @if ($event->event_status == 0)
                                <p class="mt-2 rounded-md bg-green-400 p-2 font-semibold">Gaat door</p>
                            @elseif ($event->event_status == 1)
                                <p class="mt-2 rounded-md bg-yellow-400 p-2 font-semibold">Event is bezig</p>
                            @else
                                <p class="mt-2 rounded-md bg-red-700 p-2 font-semibold">Afgelast</p>
                            @endif
                        </div>
                    </x-landingpage.card>
                @endforeach
            @else
                <h2>Er zijn nog geen events!</h2>
            @endif
        </div>
    </x-landingpage.hero>
    <x-landingpage.hero id="reviews" class="from-red-800 via-red-700 to-red-600">
        @if (Auth::user())
            @if (Auth::user()->admin == 1)
                <x-landingpage.tekst>
                    Reviews van Panic Potion!
                </x-landingpage.tekst>
            @else
                <x-landingpage.tekst>
                    Reviews van Panic Potion!
                </x-landingpage.tekst>
                <x-landingpage.box-link href=/reviews/create class="bg-pink-600 hover:bg-indigo-600">
                    Schrijf een review!
                </x-landingpage.box-link>
            @endif
        @else
            <x-landingpage.tekst>
                Reviews van Panic Potion!
            </x-landingpage.tekst>
        @endif
        <div class="flex max-w-full flex-wrap justify-center gap-8">
            @if ($reviews->count() > 0)
                @foreach ($reviews as $review)
                    <x-landingpage.card class="border-2">
                        <h3 class="mb-4 text-2xl font-bold text-white">{{ $review->titel_review }}</h3>
                        <p class="text-gray-300"><span class="indent-8">{{ $review->beschrijving_review }}</span>
                        </p>
                        <div class="mt-6 flex items-center justify-between">
                            <div class="flex items-center">
                                <svg class="mr-2 h-6 w-6 text-yellow-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7">
                                    </path>
                                </svg>
                                <p class="font-bold text-yellow-400">Rating: {{ $review->rating }}</p>
                            </div>
                        </div>
                        <div class="mt-4 text-left text-white">
                            @if ($review->user)
                                <span class="text-green-500">Door:</span> {{ $review->user->name }}
                            @else
                                <span class="text-gray-500">Anonieme Gebruiker</span>
                            @endif
                        </div>
                    </x-landingpage.card>
                @endforeach
            @else
                <h2>Er zijn nog geen Reviews!</h2>
            @endif
        </div>
    </x-landingpage.hero>
</x-main-layout>

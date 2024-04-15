<x-section.main class="from-fuchsia-800 via-indigo-700 to-blue-600">
    <x-section.main-tekst class="mb-4">
        @if (!Auth::user()->admin == 1)
            Welkom bij de highscore pagina!
        @else
            Alle highscores!
        @endif
    </x-section.main-tekst>
    <div class="flex justify-center space-x-4">
        @if (!Auth::user()->admin == 1)
            <x-section.button-actie href=/highscore/create class="bg-fuchsia-500 hover:bg-yellow-300">
                Voeg nieuwe highscore toe!
            </x-section.button-actie>
            <x-section.button-actie href=/userhighscore class="bg-teal-500 hover:bg-rose-600">
                Mijn highscores!
            </x-section.button-actie>
        @endif
    </div>
    @include('components.flash')
    <div class="relative shadow-md sm:rounded-lg">
        <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
            <caption
                class="bg-white p-5 text-left text-lg font-semibold text-gray-900 rtl:text-right dark:bg-gray-800 dark:text-white">
                Highscores
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Bekijk een lijst met highscores</p>
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
            </tbody>
        </table>
    </div>
</x-section.main>

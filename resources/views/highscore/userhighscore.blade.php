<x-section.main class="from-fuchsia-800 via-indigo-700 to-blue-600">
    <x-section.main-tekst>
        Jouw eigen highscores!
    </x-section.main-tekst>
    <div class="flex justify-center space-x-4">
        <x-section.button-actie href=/highscore/create class="bg-pink-400 hover:bg-amber-400">
            Voeg een nieuwe highscore toe!
        </x-section.button-actie>
        <x-section.button-actie href=/highscore class="bg-green-500 hover:bg-red-600">
            Terug naar index!
        </x-section.button-actie>
    </div>
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
                        <span class="sr-only">Acties</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($highscores as $highscore)
                    <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                        <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                            {{ $highscore->score }}
                        </td>
                        <td class="space-x-2 px-6 py-4 text-right">
                            <a href="{{ route('highscore.show', $highscore->id) }}"
                                class="font-medium text-blue-600 hover:underline dark:text-blue-500">Toon</a>
                            <a href="{{ route('highscore.edit', $highscore->id) }}"
                                class="font-medium text-green-600 hover:underline dark:text-green-500">Bewerk</a>
                            <form action="{{ route('highscore.destroy', $highscore->id) }}" method="POST"
                                onsubmit="return confirm('Weet je zeker dat je dit wilt verwijderen?')"
                                class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="font-medium text-red-600 hover:underline dark:text-red-500">Verwijder</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-section.main>

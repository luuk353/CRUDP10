@extends('layouts.main')

@section('content')
    <main class="min-h-screen bg-gradient-to-l from-fuchsia-800 via-indigo-700 to-blue-600 p-8">
        <div class="text-white font-bold text-5xl text-center mb-8">
            Jouw eigen highscores!
        </div>
        <div class="flex justify-center mb-4">
            <a href="{{ route('highscore.create') }}" class="bg-fuchsia-500 hover:bg-fuchsia-600 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                Voeg nieuwe highscore toe
            </a>
            <a href="{{ route('highscore.index') }}" class="ml-2 bg-violet-500 hover:bg-violet-600 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                Ga terug naar alle highscores!
            </a>
        </div>
        <div class="relative shadow-md sm:rounded-lg">
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
                        <span class="sr-only">Acties</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($highscores as $highscore)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $highscore->score }}
                        </td>
                        <td class="px-6 py-4 text-right space-x-2">
                            <a href="{{ route('highscore.show', $highscore->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Toon</a>
                            <a href="{{ route('highscore.edit', $highscore->id) }}" class="font-medium text-green-600 dark:text-green-500 hover:underline">Bewerk</a>
                            <form action="{{ route('highscore.destroy', $highscore->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je dit wilt verwijderen?')" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Verwijder</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection

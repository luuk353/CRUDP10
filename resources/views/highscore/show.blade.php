<x-section.main class="from-fuchsia-800 via-indigo-700 to-blue-600">
    <x-section.main-tekst>
        Bekijk score!
    </x-section.main-tekst>
    <x-section.button-actie href=/userhighscore class="bg-slate-400 hover:bg-white hover:text-black">
        Terug naar index!
    </x-section.button-actie>
    <div class="flex justify-center text-white">
        <x-section.card class="bg-gray-700">
            <p class="mb-4 text-lg">Score: {{ $highscore->score }}</p>
            <p class="mb-4 text-lg">Gepbuliceerd op: {{ $highscore->created_at->format('H:i, d-m-Y') }}</p>
            <p class="mb-4 text-xl font-bold text-yellow-400">User: {{ $highscore->user->name }}</p>
        </x-section.card>
    </div>
</x-section.main>

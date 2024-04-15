<x-section.main class="from-fuchsia-800 via-indigo-700 to-blue-600">
    <x-section.main-tekst>
        Highscore bewerken!
    </x-section.main-tekst>
    <x-section.button-actie href=/highscore class="bg-fuchsia-800 hover:bg-slate-500">
        Terug naar index!
    </x-section.button-actie>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="mb-4 rounded bg-black p-4 text-white">{{ $error }}</div>
        @endforeach
    @endif

    <div class="flex justify-center text-white">
        <x-section.card class="bg-gray-700">
            <form action="{{ route('highscore.update', $highscore->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="score" class="mb-2 block text-sm font-bold text-gray-200">Score *</label>
                    <input type="number" name="score" min="0"
                        class="w-full rounded border bg-gray-700 px-3 py-2 text-white focus:border-indigo-500 focus:outline-none focus:ring focus:ring-indigo-200"
                        value="{{ old('schore', $highscore->score) }}">
                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="transform rounded-full bg-lime-400 px-4 py-2 font-bold text-white transition duration-300 ease-in-out hover:scale-105 hover:bg-red-600">Verstuur</button>
                </div>
            </form>
        </x-section.card>
    </div>
</x-section.main>

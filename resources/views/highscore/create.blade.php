<x-section.main class="from-fuchsia-800 via-indigo-700 to-blue-600">
    <x-section.main-tekst>
        Schrijf je highscore!
    </x-section.main-tekst>
    <x-section.button-actie href=/highscore class="bg-amber-400 hover:bg-lime-600">
        Terug naar index!
    </x-section.button-actie>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="mb-4 rounded bg-black p-4 text-white">{{ $error }}</div>
        @endforeach
    @endif

    <div class="flex justify-center text-white">
        <x-section.card class="bg-gray-700">
            <form action="{{ route('highscore.store') }}" method="post">
                @csrf
                <div class="mb-4">
                    <x-section.label for=score>
                        Score *
                    </x-section.label>
                    <x-section.input type=number name=score id=score min=0 value="{{ old('score') }}"
                        placeholder="Score van je run!" class="bg-gray-700" />
                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="hover:bg-whie transform rounded-full bg-emerald-500 px-4 py-2 font-bold text-white transition duration-300 ease-in-out hover:scale-105 hover:bg-white hover:text-black">Verstuur</button>
                </div>
            </form>
        </x-section.card>
    </div>
</x-section.main>

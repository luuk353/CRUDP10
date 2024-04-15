<x-section.main class="from-red-600 via-orange-400 to-yellow-200">
    <x-section.main-tekst>
        Achievement bewerken!
    </x-section.main-tekst>
    <x-section.button-actie href=/achievements class="bg-violet-700 hover:bg-sky-600">
        Terug naar index!
    </x-section.button-actie>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="mb-4 rounded bg-black p-4 text-white">{{ $error }}</div>
        @endforeach
    @endif

    <div class="flex justify-center text-white">
        <x-section.card class="w-1/5 bg-gray-700">
            <form action="{{ route('achievements.update', $achievement->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="mb-4">
                    <x-section.label for=name>
                        Naam achievement *
                    </x-section.label>
                    <x-section.input type=text name=name id=name placeholder="Naam achievement!"
                        value="{{ old('name', $achievement->name) }}" class="bg-gray-700" />
                </div>
                <div class="mb-4">
                    <x-section.label for=description>
                        Beschrijving achievement!
                    </x-section.label>
                    <x-section.textarea name=description id=description placeholder="Beschrijving achievement!">
                        {{ old('description', $achievement->description) }}
                    </x-section.textarea>
                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="transform rounded-full bg-emerald-400 px-4 py-2 font-bold text-white transition duration-300 ease-in-out hover:scale-105 hover:bg-orange-400">Verstuur</button>
                </div>
            </form>
        </x-section.card>
    </div>
</x-section.main>

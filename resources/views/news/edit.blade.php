<x-section.main class="from-brown to-lightBrown">
    <x-section.main-tekst>
        Nieuws blog bewerken!
    </x-section.main-tekst>
    <x-section.button-actie href=/news class="bg-sky-400 hover:bg-emerald-600">
        Terug naar index!
    </x-section.button-actie>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="mb-4 rounded bg-black p-4 text-white">{{ $error }}</div>
        @endforeach
    @endif

    <div class="flex justify-center text-white">
        <x-section.card class="w-2/5 bg-gray-700">
            <form action="{{ route('news.update', $news->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-4">
                    <x-section.label for=title>
                        Titel *
                    </x-section.label>
                    <x-section.input type=text name=title id=title placeholder="{{ $news->title }}"
                        value="{{ old('title', $news->title) }}" class="bg-gray-700" />
                </div>
                <div class="mb-4">
                    <x-section.label for=beschrijving>
                        Beschrijving nieuwsblog *
                    </x-section.label>
                    <x-section.textarea name=beschrijving id=beschrijving placeholder="{{ $news->beschrijving }}">
                        {{ old('beschrijving', $news->beschrijving) }}
                    </x-section.textarea>
                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="transform rounded-full bg-violet-500 px-4 py-2 font-bold text-white transition duration-300 ease-in-out hover:scale-105 hover:bg-black">Verstuur</button>
                </div>
            </form>
        </x-section.card>
    </div>
</x-section.main>

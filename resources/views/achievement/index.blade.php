<x-section.main class="from-red-600 via-orange-400 to-yellow-200">
    <x-section.main-tekst>
        @if (!Auth::user()->admin == 1)
            Welkom bij de achievement pagina!
        @else
            Alle achievements!
        @endif
    </x-section.main-tekst>
    @if (Auth::user()->admin == 1)
        <x-section.button-actie href=/achievements/create class="bg-purple-500 hover:bg-cyan-400">
            Voeg een achievement toe!
        </x-section.button-actie>
    @else
        <x-section.button-actie href=/achievements/user class="bg-purple-500 hover:bg-cyan-400">
            Mijn achievements
        </x-section.button-actie>
    @endif
    @include('components.flash')
    <div class="mt-6 grid grid-cols-1 justify-center gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($achievements as $achievement)
            <x-section.card class="bg-gray-700 text-white">
                <h2 class="text-center text-2xl font-bold">Naam achievement: {{ $achievement->name }}</h2>
                <p class="my-2 font-bold">Beschrijving achievement: <span
                        class="ml-2">{{ $achievement->description }}</span></p>
                <div class="mt-2 flex justify-center">
                    <div class="flex w-full justify-center">
                        <p class="max-w-1/2 w-auto rounded-md bg-sky-500 p-2 text-center"><a
                                href="{{ route('achievements.show', $achievement->id) }}">Bekijk</a></p>
                        @if (Auth()->user()->admin == 1)
                            <p class="max-w-1/2 mx-3 w-auto rounded-md bg-yellow-500 p-2 text-center"><a
                                    href="{{ route('achievements.edit', $achievement->id) }}">Bewerk</a></p>
                            <form action="{{ route('achievements.destroy', $achievement->id) }}" method="post"
                                class="max-w-1/2 w-auto rounded-md bg-red-500 p-2 text-center">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Verwijder</button>
                            </form>
                        @endif
                    </div>
                </div>
            </x-section.card>
        @endforeach
    </div>
    <div class="mt-5 flex justify-center">
        <div class="flex">
            {{ $achievements->onEachSide(5)->links() }}
        </div>
    </div>
</x-section.main>

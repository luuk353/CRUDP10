<x-section.main class="from-red-600 via-orange-400 to-yellow-200">
    <x-section.main-tekst>
        Mijn achievements!
    </x-section.main-tekst>
    <x-section.button-actie href=/achievements class="bg-sky-400 hover:bg-lime-400">
        Terug naar index!
    </x-section.button-actie>
    <div class="mt-6 grid grid-cols-1 justify-center gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($user_achievements as $user_achievement)
            <x-section.card class="bg-gray-700 text-white">
                <h2 class="text-center text-2xl font-bold">Naam achievement:
                    {{ $user_achievement->achievement->name }}</h2>
                <p class="my-2 font-bold">Beschrijving achievement:
                    <span class="indent-8">{{ $user_achievement->achievement->description }}</span>
                </p>
            </x-section.card>
        @endforeach
    </div>
</x-section.main>

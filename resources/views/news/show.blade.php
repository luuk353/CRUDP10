<x-section.main class="from-brown to-lightBrown">
    <x-section.main-tekst>
        Bekijk nieuws blog!
    </x-section.main-tekst>
    <x-section.button-actie href=/news class="bg-purple-600 hover:bg-black">
        Terug naar index!
    </x-section.button-actie>
    <div class="flex justify-center text-center text-white">
        <x-section.card class="w-2/5 bg-gray-700">
            <h1 class="text-2xl">{{ $news->title }}</h1>
            <p>{{ $news->beschrijving }}</p>
            <p class="my-4">Geschreven door: {{ $news->user->name }}</p>
        </x-section.card>
    </div>
</x-section.main>

<x-section.main class="from-emerald-400 via-green-400 to-cyan-600">
    <x-section.main-tekst>
        Bekijk event!
    </x-section.main-tekst>
    <x-section.button-actie href=/events class="bg-pink-500 hover:bg-indigo-400">
        Terug naar index!
    </x-section.button-actie>
    <div class="flex justify-center text-white">
        <x-section.card class="bg-gray-700">
            <img class="mb-4 h-auto w-full" src="{{ asset('storage/images/' . $event->event_foto) }}"
                alt="{{ $event->event_naam }}">
            <h3 class="mb-2 text-2xl font-bold text-white">{{ $event->event_naam }}</h3>
            <p class="mb-2 font-semibold"><span class="indent-8">Beschrijving: {{ $event->event_beschrijving }}</span></p>
            <p>Locatie van het event: {{ $event->event_locatie }}</p>
            <div class="flex">
                <p class="mr-2">Begint om: {{ date('H:i', strtotime($event->begin_tijd)) }}</p>
                <p>{{ date('d-m-Y', strtotime($event->begin_datum)) }}</p>
            </div>
            <div class="flex">
                <p class="mr-2">Eindigt op: {{ date('H:i', strtotime($event->eind_tijd)) }}</p>
                <p>{{ date('d-m-Y', strtotime($event->eind_datum)) }}</p>
            </div>
            <div class="mb-4">
                @if ($event->event_status == 0)
                    <p class="mt-2 rounded-md bg-green-400 p-2 font-semibold">Gaat door</p>
                @elseif ($event->event_status == 1)
                    <p class="mt-2 rounded-md bg-yellow-400 p-2 font-semibold">Event is bezig</p>
                @else
                    <p class="mt-2 rounded-md bg-red-700 p-2 font-semibold">Afgelast</p>
                @endif
            </div>
        </x-section.card>
    </div>
</x-section.main>

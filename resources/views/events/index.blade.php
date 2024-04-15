<x-section.main class="from-emerald-400 via-green-400 to-cyan-600">
    <x-section.main-tekst>
        @if ($admin)
            <h1>Alle events!</h1>
        @else
            <h1>Welkom bij de events pagina!</h1>
        @endif
    </x-section.main-tekst>
    <x-section.button-actie href=/events/create class="bg-red-500 hover:bg-cyan-600">
        Maak een event!
    </x-section.button-actie>
    @include('components.flash')
    <div class="mt-6 grid grid-cols-1 justify-center gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($events as $event)
            <x-section.card class="bg-zinc-600 text-white">
                <img class="mb-4 h-auto w-full" src="{{ asset('storage/images/' . $event->event_foto) }}"
                    alt="{{ $event->event_naam }}">
                <h2 class="text-center text-2xl font-bold">Event naam: {{ $event->event_naam }}</h2>
                <p class="my-2 font-bold">Event beschrijving: <span class="ml-2">{{ $event->event_beschrijving }}</span>
                </p>
                <div class="flex">
                    <p class="mt-4 font-bold">Begin datum: {{ date('d-m-Y', strtotime($event->begin_datum)) }}</p>
                    <p class="ml-2 mt-4 font-bold">Begin tijd: {{ $event->begin_tijd }}</p>
                </div>
                <div class="flex">
                    <p class="mt-4 font-bold">Eind datum: {{ date('d-m-Y', strtotime($event->eind_datum)) }}</p>
                    <p class="ml-2 mt-4 font-bold">Eind tijd: {{ $event->eind_tijd }}</p>
                </div>
                <div class="mt-2 flex flex-wrap justify-center">
                    <p class="w-auto rounded-md bg-sky-500 p-2 text-center">
                        <a href="{{ route('events.show', $event->id) }}">Bekijk</a>
                    </p>
                    @if ($admin)
                        <p class="mx-3 w-auto rounded-md bg-yellow-500 p-2 text-center">
                            <a href="{{ route('events.edit', $event->id) }}">Bewerk</a>
                        </p>
                        <form action="{{ route('events.destroy', $event->id) }}" method="post"
                            class="w-auto rounded-md bg-red-500 p-2 text-center">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Verwijder</button>
                        </form>
                    @endif
                </div>
            </x-section.card>
        @endforeach
    </div>
</x-section.main>

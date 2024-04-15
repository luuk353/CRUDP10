<x-section.main class="from-emerald-400 via-green-400 to-cyan-600">
    <x-section.main-tekst>
        Event bewerken!
    </x-section.main-tekst>
    <x-section.button-actie href=/events class="bg-orange-500 hover:bg-pink-400">
        Terug naar index!
    </x-section.button-actie>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="mb-4 rounded bg-black p-4 text-white">{{ $error }}</div>
        @endforeach
    @endif

    <div class="flex justify-center text-white">
        <x-section.card class="bg-gray-800">
            <form action="{{ route('events.update', $event->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <x-section.label for=event_naam>
                        Naam event *
                    </x-section.label>
                    <x-section.input type=text name=event_naam id=event_naam placeholder="Game event!"
                        class="bg-gray-700" value="{{ old('event_naam', $event->event_naam) }}" />
                </div>
                <div class="mb-4">
                    <x-section.label for=event_beschrijving>
                        Beschrijving event *
                    </x-section.label>
                    <x-section.textarea name=event_beschrijving id=event_beschrijving
                        placeholder="De grootste game event van de wereld!">
                        {{ old('event_beschrijving', $event->event_beschrijving) }}
                    </x-section.textarea>
                </div>
                <div class="mb-4">
                    <x-section.label for=event_locatie>
                        Locatie event *
                    </x-section.label>
                    <x-section.input type=text name=event_locatie id=event_locatie
                        value="{{ old('event_locatie', $event->event_locatie) }}"
                        placeholder="Schoolstraat 12a, 6969lo, Amsterdam" class="bg-gray-700" />
                </div>
                <div class="mb-4">
                    <x-section.label for=begin_datum>
                        Begin datum event
                    </x-section.label>
                    <x-section.input type=date name=begin_datum id=begin_datum
                        value="{{ old('begin_datum', $event->begin_datum) }}" class="bg-gray-700" placeholder=dd/mm/yyyy
                        max=9999-12-31 />
                </div>
                <div class="mb-4">
                    <x-section.label for=begin_tijd>Begin tijd event *</x-section.label>
                    <x-section.input type=time name=begin_tijd id=begin_tijd placeholder=12:12:12 class="bg-gray-700"
                        value="{{ old('begin_tijd', $event->begin_tijd) }}" />
                </div>
                <div class="mb-4">
                    <x-section.label for=eind_datum>
                        Eind datum event
                    </x-section.label>
                    <x-section.input type=date name=eind_datum id=eind_datum
                        value="{{ old('eind_datum', $event->eind_datum) }}" class="bg-gray-700" placeholder=dd/mm/yyyy
                        max=9999-12-31 />
                </div>
                <div class="mb-4">
                    <x-section.label for=eind_tijd>Eind tijd event *</x-section.label>
                    <x-section.input type=time name=eind_tijd id=eind_tijd placeholder=12:12:12 class="bg-gray-700"
                        value="{{ old('eind_tijd', $event->eind_tijd) }}" />
                </div>
                <div class="mb-4">
                    <x-section.label for=event_foto>Event foto *</x-section.label>
                    <x-section.input type=file name=event_foto id=event_foto placeholder="" class="bg-gray-700"
                        value="{{ old('event_foto', $event->event_foto) }}" />
                </div>
                <div class="mb-4">
                    <label for="event_status" class="mb-2e block text-sm font-bold text-gray-200">Status event</label>
                    <select name="event_status" id="event_status"
                        class="w-full rounded border bg-gray-700 px-3 py-2 text-white focus:border-indigo-500 focus:outline-none focus:ring focus:ring-indigo-200">
                        <option value="0" @if (old('event_status') == 0) {{ 'selected' }} @endif>Gaat door
                        </option>
                        <option value="1" @if (old('event_status') == 1) {{ 'selected' }} @endif>Wordt
                            aangepast</option>
                        <option value="2" @if (old('event_status') == 2) {{ 'selected' }} @endif>Afgelast
                        </option>
                    </select>
                </div>
                <button type="submit"
                    class="transform rounded-full bg-orange-500 px-4 py-2 font-bold text-white transition duration-300 ease-in-out hover:scale-105 hover:bg-orange-700">Verstuur</button>
            </form>
        </x-section.card>
    </div>

</x-section.main>

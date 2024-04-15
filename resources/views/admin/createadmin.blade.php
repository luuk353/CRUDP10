<x-section.main class="from-gray-800 via-slate-700 to-zinc-600">
    <x-section.main-tekst>
        Maak een nieuwe admin!
    </x-section.main-tekst>
    <x-section.button-actie href=/admin/dashboard class="bg-emerald-500 hover:bg-pink-600">
        Terug naar index!
    </x-section.button-actie>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="mb-4 rounded bg-red-500 p-4 text-white">{{ $error }}</div>
        @endforeach
    @endif

    <div class="flex justify-center">
        <x-section.card class="w-1/4 text-white">
            <form action="{{ route('admin.store') }}" method="post">
                @csrf
                <div class="mb-4">
                    <x-section.label for=name>
                        Gebruikersnaam
                    </x-section.label>
                    <x-section.input name=name id=name placeholder=name type=text value=name class="bg-gray-700" />
                </div>
                <div class="mb-4">
                    <x-section.label for=email>
                        Email
                    </x-section.label>
                    <x-section.input type=email name=email id=email value=email placeholder="henk@gmail.com"
                        class=bg-gray-700 />
                </div>
                <div class="mb-4">
                    <x-section.label for=wachtwoord>
                        Wachtwoord
                    </x-section.label>
                    <x-section.input type=password name=password id=password value=wachtwoord
                        placeholder=#WachtWoord543! class="bg-gray-700" />
                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="transform rounded-full bg-emerald-500 px-4 py-2 font-bold text-white transition duration-300 ease-in-out hover:scale-105 hover:bg-pink-600">Verstuur</button>
                </div>
            </form>
        </x-section.card>
    </div>
</x-section.main>

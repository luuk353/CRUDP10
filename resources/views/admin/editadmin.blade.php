<x-section.main class="from-gray-800 via-slate-700 to-zinc-600">
    <x-section.main-tekst>
        Admin bewerken!
    </x-section.main-tekst>
    <x-section.button-actie href=/admin/index class="bg-blue-500 hover:bg-rose-700">
        Terug naar index!
    </x-section.button-actie>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="mb-4 rounded bg-black p-4 text-white">{{ $error }}</div>
        @endforeach
    @endif

    <div class="flex justify-center text-white">
        <x-section.card class="w-1/4">
            <form action="{{ route('admin.update', $admin->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="mb-4">
                    <x-section.label for=name>
                        Gebruikersnaam
                    </x-section.label>
                    <x-section.input name=name id=name placeholder=name type=text value="{{ old('name', $admin->name) }}"
                        class="bg-gray-700" />
                </div>
                <div class="mb-4">
                    <x-section.label for=name>
                        Email
                    </x-section.label>
                    <x-section.input type=email name=email id=email value="{{ old('email', $admin->email) }}"
                        placeholder=henk@gmail.com class="bg-gray-700" />
                </div>
                <div class="mb-4">
                    <x-section.label for=password>
                        Wachtwoord
                    </x-section.label>
                    <x-section.input type=password name=password id=password placeholder=Wachtwoord123!
                        class="bg-gray-700" />
                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="transform rounded-full bg-blue-500 px-4 py-2 font-bold text-white transition duration-300 ease-in-out hover:scale-105 hover:bg-rose-700">Verstuur</button>
                </div>
            </form>
        </x-section.card>
    </div>
</x-section.main>

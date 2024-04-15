<x-section.main class="from-gray-800 via-slate-700 to-zinc-600">
    <x-section.main-tekst>
        Welkom bij de admin pagina
    </x-section.main-tekst>
    <div class="flex justify-center space-x-4">
        <x-section.button-actie href=/admin/dashboard class="bg-amber-400 hover:bg-emerald-500">
            Ga naar dashboard!
        </x-section.button-actie>
        <x-section.button-actie href=/admin/create class="bg-rose-500 hover:bg-cyan-500">
            Maak een nieuwe admin!
        </x-section.button-actie>
    </div>
    @include('components.flash')
    <div class="mt-6 grid grid-cols-1 justify-center gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
        @foreach ($admins as $admin)
            <x-section.card class="bg-gray-800 text-white">
                <div class="p-6">
                    <h2 class="mb-4 text-center text-2xl font-bold">Naam admin: {{ $admin->name }}</h2>
                    <p class="mb-2 font-bold">Email admin: <span class="ml-2">{{ $admin->email }}</span></p>
                    <div class="mt-4 flex justify-center">
                        <p class="mr-2 w-auto rounded-md bg-sky-500 p-2 text-center"><a
                                href="{{ route('admin.show', $admin->id) }}">Bekijk</a></p>
                        <p class="mr-2 w-auto rounded-md bg-yellow-300 p-2 text-center"><a
                                href="{{ route('admin.edit', $admin->id) }}">Bewerk</a></p>
                        <form action="{{ route('admin.destroy', $admin->id) }}" method="post"
                            class="w-auto rounded-md bg-red-500 p-2 text-center">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Verwijder</button>
                        </form>
                    </div>
                </div>
            </x-section.card>
        @endforeach
    </div>
</x-section.main>

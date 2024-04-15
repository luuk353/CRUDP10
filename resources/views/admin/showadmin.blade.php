<x-section.main class="from-gray-800 via-slate-700 to-zinc-600">
    <x-section.main-tekst>
        Bekijk admin!
    </x-section.main-tekst>
    <x-section.button-actie href=/admin/index class="bg-teal-400 hover:bg-purple-600">
        Terug naar index!
    </x-section.button-actie>
    <div class="flex justify-center">
        <x-section.card class="w-1/2 bg-gray-800 text-center text-white">
            <h1>
                Username: {{ $admin->name }}
            </h1>
            <p>
                Email: {{ $admin->email }}
            </p>
        </x-section.card>
    </div>
</x-section.main>

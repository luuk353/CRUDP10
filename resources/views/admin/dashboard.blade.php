<x-section.main class="from-gray-800 via-slate-700 to-zinc-500">
    <x-section.main-tekst>
        Admin dashboard!
    </x-section.main-tekst>
    <div class="flex justify-center space-x-4">
        <x-section.button-actie href=/admin/index class="bg-lime-400 hover:bg-emerald-600">
            Ga naar de admin pagina!
        </x-section.button-actie>
        <x-section.button-actie href=/admin/create class="bg-indigo-500 hover:bg-blue-700">
            Maak een nieuwe admin aan!
        </x-section.button-actie>
    </div>
    <x-flash />
    <div class="mt-2 grid grid-cols-1 justify-center gap-3 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        {{-- events --}}
        <x-dashboard-blok class="bg-emerald-500 shadow-emerald-700">
            <svg class="h-6 w-6 text-white dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                    clip-rule="evenodd" />
            </svg>
            <p>
                @if ($events > 0)
                    <span class="mx-auto text-white">Events: {{ $events }}</span>
                @else
                    <span class="mx-auto text-white">Er zijn nog geen events.</span>
                @endif
            </p>
        </x-dashboard-blok>
        {{-- admins --}}
        <x-dashboard-blok class="bg-cyan-500 shadow-cyan-700">
            <svg class="h-6 w-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 14 18">
                <path
                    d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
            </svg>
            @if ($admins > 0)
                <span class="mx-auto text-white">Admins: {{ $admins }}</span>
            @else
                <span class="mx-auto text-white">Er zijn nog geen admins.</span>
            @endif
        </x-dashboard-blok>
        {{-- achievements --}}
        <x-dashboard-blok class="bg-yellow-400 shadow-yellow-600">
            <svg class="h-6 w-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M15 9.7h4a2 2 0 0 1 1.6.9 2 2 0 0 1 .3 1.8l-2.4 7.2c-.3.9-.5 1.4-1.9 1.4-2 0-4.2-.7-6.1-1.3L9 19.3V9.5A32 32 0 0 0 13.2 4c.1-.4.5-.7.9-.9h1.2c.4.1.7.4 1 .7l.2 1.3L15 9.7ZM4.2 10H7v8a2 2 0 1 1-4 0v-6.8c0-.7.5-1.2 1.2-1.2Z"
                    clip-rule="evenodd" />
            </svg>
            @if ($achievements > 0)
                <span class="mx-auto text-white">Achievements: {{ $achievements }}</span>
            @else
                <span class="mx-auto text-white">Er zijn nog geen achievements.</span>
            @endif
        </x-dashboard-blok>
        {{-- reviews --}}
        <x-dashboard-blok class="bg-red-600 shadow-red-800">
            <svg class="h-6 w-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 18">
                <path
                    d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
            </svg>
            @if ($reviews > 0)
                <span class="mx-auto text-white">Reviews: {{ $reviews }}</span>
            @else
                <span class="mx-auto text-white">Er zijn nog geen reviews.</span>
            @endif
        </x-dashboard-blok>
        {{-- users --}}
        <x-dashboard-blok class="bg-pink-500 shadow-pink-700">
            <svg class="h-6 w-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                    clip-rule="evenodd" />
            </svg>
            @if ($users > 0)
                <span class="mx-auto text-white">Users: {{ $users }}</span>
            @else
                <span class="mx-auto text-white">Er zijn nog geen users.</span>
            @endif
        </x-dashboard-blok>
        {{-- products --}}
        <x-dashboard-blok class="border-2 shadow-white">
            <svg class="h-6 w-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M8.597 3.2A1 1 0 0 0 7.04 4.289a3.49 3.49 0 0 1 .057 1.795 3.448 3.448 0 0 1-.84 1.575.999.999 0 0 0-.077.094c-.596.817-3.96 5.6-.941 10.762l.03.049a7.73 7.73 0 0 0 2.917 2.602 7.617 7.617 0 0 0 3.772.829 8.06 8.06 0 0 0 3.986-.975 8.185 8.185 0 0 0 3.04-2.864c1.301-2.2 1.184-4.556.588-6.441-.583-1.848-1.68-3.414-2.607-4.102a1 1 0 0 0-1.594.757c-.067 1.431-.363 2.551-.794 3.431-.222-2.407-1.127-4.196-2.224-5.524-1.147-1.39-2.564-2.3-3.323-2.788a8.487 8.487 0 0 1-.432-.287Z" />
            </svg>
            @if ($products > 0)
                <span class="mx-auto text-white">Products: {{ $products }}</span>
            @else
                <span class="mx-auto text-white">Er zijn nog geen producten.</span>
            @endif
        </x-dashboard-blok>
        {{-- bestelligen --}}
        <x-dashboard-blok class="bg-orange-400 shadow-orange-600">
            <svg class="h-6 w-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M20 7h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C10.4 2.842 8.949 2 7.5 2A3.5 3.5 0 0 0 4 5.5c.003.52.123 1.033.351 1.5H4a2 2 0 0 0-2 2v2a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V9a2 2 0 0 0-2-2Zm-9.942 0H7.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM13 14h-2v8h2v-8Zm-4 0H4v6a2 2 0 0 0 2 2h3v-8Zm6 0v8h3a2 2 0 0 0 2-2v-6h-5Z" />
            </svg>
            @if ($bestellingen > 0)
                <span class="mx-auto text-white">Bestellingen: {{ $bestellingen }}</span>
            @else
                <span class="mx-auto text-white">Er zijn nog geen bestellingen.</span>
            @endif
        </x-dashboard-blok>
        {{-- highscores --}}
        <x-dashboard-blok class="bg-purple-500 shadow-purple-700">
            <svg class="h-6 w-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M11 21V2.352A3.451 3.451 0 0 0 9.5 2a3.5 3.5 0 0 0-3.261 2.238A3.5 3.5 0 0 0 4.04 8.015a3.518 3.518 0 0 0-.766 1.128c-.042.1-.064.209-.1.313a3.34 3.34 0 0 0-.106.344 3.463 3.463 0 0 0 .02 1.468A4.017 4.017 0 0 0 2.3 12.5l-.015.036a3.861 3.861 0 0 0-.216.779A3.968 3.968 0 0 0 2 14c.003.24.027.48.072.716a4 4 0 0 0 .235.832c.006.014.015.027.021.041a3.85 3.85 0 0 0 .417.727c.105.146.219.285.342.415.072.076.148.146.225.216.1.091.205.179.315.26.11.081.2.14.308.2.02.013.039.028.059.04v.053a3.506 3.506 0 0 0 3.03 3.469 3.426 3.426 0 0 0 4.154.577A.972.972 0 0 1 11 21Zm10.934-7.68a3.956 3.956 0 0 0-.215-.779l-.017-.038a4.016 4.016 0 0 0-.79-1.235 3.417 3.417 0 0 0 .017-1.468 3.387 3.387 0 0 0-.1-.333c-.034-.108-.057-.22-.1-.324a3.517 3.517 0 0 0-.766-1.128 3.5 3.5 0 0 0-2.202-3.777A3.5 3.5 0 0 0 14.5 2a3.451 3.451 0 0 0-1.5.352V21a.972.972 0 0 1-.184.546 3.426 3.426 0 0 0 4.154-.577A3.506 3.506 0 0 0 20 17.5v-.049c.02-.012.039-.027.059-.04.106-.064.208-.13.308-.2s.214-.169.315-.26c.077-.07.153-.14.225-.216a4.007 4.007 0 0 0 .459-.588c.115-.176.215-.361.3-.554.006-.014.015-.027.021-.041.087-.213.156-.434.205-.659.013-.057.024-.115.035-.173.046-.237.07-.478.073-.72a3.948 3.948 0 0 0-.066-.68Z" />
            </svg>
            @if ($highscores > 0)
                <span class="mx-auto text-white">Highscores: {{ $highscores }}</span>
            @else
                <span class="mx-auto text-white">Er zijn nog geen highscores.</span>
            @endif
        </x-dashboard-blok>
    </div>
</x-section.main>

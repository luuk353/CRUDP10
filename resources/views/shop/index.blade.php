<x-section.main class="from-pink-500 to-teal-500">
    <x-section.main-tekst>
        @if (!Auth::user()->admin == 1)
            Welkom bij de webshop pagina!
        @else
            Webshop pagina
        @endif
    </x-section.main-tekst>
    @if (Auth::user()->admin == 1)
        <x-section.button-actie href=/shop/createproduct class="bg-emerald-400 hover:bg-emerald-600">
            Voeg een product toe!
        </x-section.button-actie>
    @endif
    @include('components.flash')
    @if (count($items) > 0)
        <div
            class="w-max-full mt-6 grid grid-cols-1 justify-center gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
            @foreach ($items as $item)
                <x-section.card class="bg-gray-700 text-white">
                    <a href="{{ route('shop.show', $item->id) }}" class="block h-auto w-auto">
                        <img class="w-full rounded-t-lg object-cover"
                            src="{{ asset('storage/images/' . $item->picture) }}" alt="{{ $item->picture }}" />
                    </a>
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight">
                            {{ $item->itemName }}</h5>
                        <p class="mb-3 text-lg font-medium">Aantal: <span class="font-normal">{{ $item->amount }}</span>
                        </p>
                        <p class="mb-3 text-lg font-medium">Prijs: <span class="font-normal">{{ $item->price }}</span>
                        </p>
                        <div class="flex justify-center">
                            <a href="{{ route('shop.show', $item->id) }}"
                                class="inline-flex items-center rounded-lg bg-red-700 px-3 py-2 text-center text-sm font-medium text-white duration-300 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Kopen
                                <svg class="ms-2 h-3.5 w-3.5 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </x-section.card>
            @endforeach
        </div>
    @else
        <h1 class="text-center text-2xl text-white">Er zijn nog geen producten!!!</h1>
    @endif
</x-section.main>

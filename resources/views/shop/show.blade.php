<x-section.main class="from-pink-500 via-indigo-600 to-teal-500">
    <x-section.main-tekst>
        Product bestellen!
    </x-section.main-tekst>
    <x-section.button-actie href=/shop class="bg-emerald-400 hover:bg-purple-600">
        Terug naar index!
    </x-section.button-actie>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="mb-4 rounded bg-black p-4 text-white">{{ $error }}</div>
        @endforeach
    @endif

    <div class="flex justify-center text-white">
        <x-section.card class="bg-gray-700">
            <form action="{{ route('shop.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="inventory_id" value="{{ $shopitem->id }}">
                <p class="mb-4 text-white">Wil je dit product bestellen?</p>
                <h2 class="mb-4 text-center text-2xl font-bold text-white">{{ $shopitem->itemName }}</h2>
                <div class="flex justify-center">
                    <button type="submit"
                        class="transform rounded-full bg-red-700 px-4 py-2 font-bold text-white transition duration-300 ease-in-out hover:scale-105 hover:bg-yellow-300">
                        Bestellen</button>
                </div>
            </form>
        </x-section.card>
    </div>
</x-section.main>

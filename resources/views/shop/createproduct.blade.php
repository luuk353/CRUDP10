<x-section.main class="from-pink-500 to-teal-500">
    <x-section.main-tekst>
        Voeg een product!
    </x-section.main-tekst>
    <x-section.button-actie href=/shop class="bg-lime-400 hover:bg-zinc-600">
        Terug naar index!
    </x-section.button-actie>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="mb-4 rounded bg-black p-4 text-white">{{ $error }}</div>
        @endforeach
    @endif

    <div class="flex justify-center text-white">
        <x-section.card class="bg-gray-700">
            <form action="{{ route('productopslaan') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <x-section.label for=itemName>
                        Product naam *
                    </x-section.label>
                    <x-section.input type=text name=itemName id=itemName value="{{ old('itemName') }}"
                        placeholder="T-shirt!" class="bg-gray-700" />
                </div>
                <div class="mb-4">
                    <x-section.label for=price>
                        Prijs *
                    </x-section.label>
                    <x-section.input type=number name=price id=price step="0.01" min="0" max="1000000"
                        value="{{ old('price') }}" placeholder="12.99" class="bg-gray-700" />
                </div>
                <div class="mb-4">
                    <x-section.label for=amount>
                        Aantal *
                    </x-section.label>
                    <x-section.input type=number name=amount id=amount step="1" min="0" max="1000000"
                        value="{{ old('amount') }}" placeholder="100" class="bg-gray-700" />
                </div>
                <div class="mb-4">
                    <x-section.label for=picture>
                        Product foto *
                    </x-section.label>
                    <x-section.input type=file name=picture id=picture value="{{ old('picture') }}"
                        placeholder="Foto" />
                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="transform rounded-full bg-orange-500 px-4 py-2 font-bold text-white transition duration-300 ease-in-out hover:scale-105 hover:bg-pink-400">
                        Aanmaken</button>
                </div>
            </form>
        </x-section.card>
    </div>
</x-section.main>

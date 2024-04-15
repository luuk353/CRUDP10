<x-section.main class="from-purple-800 via-pink-700 to-red-600">
    <x-section.main-tekst>
        Review bewerken!
    </x-section.main-tekst>
    <x-section.button-actie href=/reviews class="bg-orange-500 hover:bg-teal-500">
        Terug naar index!
    </x-section.button-actie>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="mb-4 rounded bg-black p-4 text-white">{{ $error }}</div>
        @endforeach
    @endif

    <div class="flex justify-center text-white">
        <x-section.card class="bg-gray-700">
            <form action="{{ route('reviews.update', $review->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <x-section.label for=titel_review>
                        Titel review *
                    </x-section.label>
                    <x-section.input type=text name=titel_review id=titel_review
                        placeholder="{{ old('titel_review', $review->titel_review) }}"
                        value="{{ old('titel_review', $review->titel_review) }}" class="bg-gray-700" />
                </div>
                <div class="mb-4">
                    <x-section.label for=beschrijving_review>
                        Beschrijving review *
                    </x-section.label>
                    <x-section.textarea name=beschrijving_review id=beschrijving_review
                        placeholder="{{ old('titel_review', $review->beschrijving_review) }}">
                        {{ old('beschrijving_review', $review->beschrijving_review) }}
                    </x-section.textarea>
                </div>
                <div class="mb-4">
                    <x-section.label for=rating>
                        Rating *
                    </x-section.label>
                    <x-section.input type=number name=rating id=rating min="0" step="0.1" max="5"
                        placeholder="{{ old('titel_review', $review->rating) }}"
                        value="{{ old('rating', $review->rating) }}" class="bg-gray-700" />
                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="transform rounded-full bg-blue-500 px-4 py-2 font-bold text-white transition duration-300 ease-in-out hover:scale-105 hover:bg-blue-700">Verstuur</button>
                </div>
            </form>
        </x-section.card>
    </div>
</x-section.main>

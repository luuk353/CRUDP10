<x-section.main class="from-purple-800 via-pink-700 to-red-600">
    <x-section.main-tekst>
        Alle reviews!
    </x-section.main-tekst>
    <x-flash />
    <div class="mt-4 grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($reviews as $review)
            <x-section.card class="bg-gray-600">
                <h2 class="mb-4 text-center text-2xl font-bold text-white">Titel: {{ $review->titel_review }}</h2>
                <p class="mb-2 font-bold text-white">Beschrijving: <span
                        class="ml-2">{{ $review->beschrijving_review }}</span>
                </p>
                <p class="mb-2 font-bold text-yellow-300">Rating: {{ $review->rating }}</p>
                <p class="text-white">Geschreven door: <span class="text-sky-300">{{ $review->user->name }}</span></p>
                <form action="{{ route('admin.destroy.review', $review->id) }}" method="post" class="mt-auto">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="mt-4 rounded-md bg-red-500 px-4 py-2 text-white">
                        Verwijder
                    </button>
                </form>
            </x-section.card>
        @endforeach
    </div>
    <div class="mt-5 flex justify-center">
        <div class="flex">
            {{ $reviews->onEachSide(5)->links() }}
        </div>
    </div>
</x-section.main>

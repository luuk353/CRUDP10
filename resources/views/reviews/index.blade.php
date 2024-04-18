<x-section.main class="bg-gradient-to-l from-purple-800 via-pink-700 to-red-600">
    <x-section.main-tekst>
        Welkom bij de reviews pagina!
    </x-section.main-tekst>
    <x-section.button-actie href=/reviews/create class="bg-green-400 hover:bg-yellow-300">
        Schrijf een review!
    </x-section.button-actie>
    <x-flash />
    <div class="mt-4 grid grid-cols-1 gap-6 text-white sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($reviews as $review)
            <x-section.card class="bg-gray-700">
                <h2 class="text-center text-2xl font-bold">Titel: {{ $review->titel_review }}</h2>
                <p class="my-2 font-bold">Beschrijving: <span class="indent-8">{{ $review->beschrijving_review }}</span>
                </p>
                <p class="my-2 font-bold text-yellow-300">Rating: {{ $review->rating }}</p>
                <p>Geschreven door: <span class="text-sky-300">{{ $review->user->name }}</span></p>
                <div class="mt-2 flex flex-wrap justify-center">
                    <p class="w-auto rounded-md bg-sky-500 p-2 text-center"><a
                            href="{{ route('reviews.show', $review->id) }}">Bekijk</a></p>
                    <p class="mx-3 w-auto rounded-md bg-yellow-500 p-2 text-center"><a
                            href="{{ route('reviews.edit', $review->id) }}">Bewerk</a></p>
                    <form action="{{ route('reviews.destroy', $review->id) }}" method="post"
                        class="w-auto rounded-md bg-red-500 p-2 text-center">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Verwijder">
                    </form>
                </div>
            </x-section.card>
        @endforeach
    </div>
    <div class="mt-4 flex justify-center">
        {{ $reviews->links() }}
    </div>
</x-section.main>

<x-section.main class="from-brown to-lightBrown">
    <x-section.main-tekst>
        @if (Auth::user()->admin == 1)
            Nieuws pagina!
        @else
            Welkom op de nieuws pagina!
        @endif
    </x-section.main-tekst>
    @if (Auth::user()->admin == 1)
        <x-section.button-actie href=/news/create class="bg-yellow-300 text-black hover:bg-green-500">
            Voeg een nieuwe nieuwsblog toe!
        </x-section.button-actie>
    @endif
    <x-flash />
    <div class="flex justify-center p-4 text-center text-white">
        <div class="w-1/2 flex-col space-y-8">
            @foreach ($news as $new)
                <x-section.card class="inner-shadow w-full400 bg-gray-700 shadow-black">
                    <h1 class="text-2xl font-semibold">{{ $new->title }}</h1>
                    <p class="">{{ $new->beschrijving }}</p>
                    <p class="my-4">Geschreven door: {{ $new->user->name }}</p>
                    <div class="mt-2 flex flex-wrap justify-center">
                        <p class="w-auto rounded-md bg-sky-500 p-2 text-center"><a
                                href="{{ route('news.show', $new->id) }}">Bekijk</a></p>
                        @if (Auth::user()->admin == 1)
                            <p class="mx-3 w-auto rounded-md bg-yellow-400 p-2 text-center"><a
                                    href="{{ route('news.edit', $new->id) }}">Bewerk</a></p>
                            <form action="{{ route('news.destroy', $new->id) }}" method="post"
                                class="w-auto rounded-md bg-red-500 p-2 text-center">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Verwijder">
                            </form>
                        @endif
                    </div>
                </x-section.card>
            @endforeach
        </div>
    </div>
    <div class="mt-4 flex justify-center">
        {{ $news->links() }}
    </div>
</x-section.main>

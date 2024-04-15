<x-section.main class="from-green-600 via-amber-300 to-red-600">
    <x-section.main-tekst>
        Forum
    </x-section.main-tekst>
    <div class="flex justify-center">
        <x-section.card class="w-3/4 bg-white">
            <!-- Forum Post Form -->
            <form action="{{ route('forum.store') }}" method="post" class="mb-6">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-600">Title:</label>
                    <input type="text" name="title" id="title"
                        class="mt-1 w-full rounded border p-2 focus:border-blue-500 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-600">Message:</label>
                    <textarea name="message" id="message" class="mt-1 w-full rounded border p-2 focus:border-blue-500 focus:outline-none"></textarea>
                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="focus:shadow-outline-blue rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-600 focus:outline-none">Create
                        Forum Post</button>
                </div>
            </form>
            <!-- Forum Posts -->
            <div class="text-center">
                <h2 class="mb-4 text-xl font-semibold">Forum Posts</h2>
                @if ($forum->count() < 1)
                    Er zijn nog geen forum posts!
                @else
                    @foreach ($forum as $post)
                        <div class="mb-4 rounded-lg bg-gray-200 p-4">
                            <h3 class="mb-2 text-lg font-bold">{{ $post->title }}</h3>
                            <p class="text-gray-800">{{ $post->text }}</p>
                            <p class="text-gray-800">{{ $post->text }}</p>
                            <p class="text-gray-800">{{ $post->name }}</p>
                        </div>
                    @endforeach
                @endif
            </div>
        </x-section.card>
    </div>
</x-section.main>

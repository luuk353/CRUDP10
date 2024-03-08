@extends('layouts.main')

@section('content')
<main>
    <div class="h-screen bg-gray-100 bg-gradient-to-l from-green-600 via-amber-300 to-red-600">
        <section class="flex justify-center items-center p-6 h-full">
            <div class="bg-white w-3/4 md:w-2/3 lg:w-1/2 xl:w-1/3 p-6 rounded-lg shadow-md">
                <h1 class="text-3xl font-bold mb-4">Forum</h1>
                <hr class="border-t border-black mb-6">

                <!-- Forum Post Form -->
                <form action="{{ route('forum.store') }}" method="post" class="mb-6">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-600">Title:</label>
                        <input type="text" name="title" id="title" class="mt-1 p-2 border rounded w-full focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-600">Message:</label>
                        <textarea name="message" id="message" class="mt-1 p-2 border rounded w-full focus:outline-none focus:border-blue-500"></textarea>
                    </div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">Create Forum Post</button>
                </form>

                <!-- Forum Posts -->
                <div>
                    <h2 class="text-xl font-semibold mb-4">Forum Posts</h2>
                    @if($forum->count() < 1)
                        Er zijn nog geen forum posts!
                    @else
                        @foreach ($forum as $post)
                            <div class="bg-gray-200 p-4 mb-4 rounded-lg">
                                <h3 class="text-lg font-bold mb-2">{{ $post->title }}</h3>
                                <p class="text-gray-800">{{ $post->text }}</p>
                                <p class="text-gray-800">{{ $post->text }}</p>
                                <p class="text-gray-800">{{ $post->name }}</p>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
    </div>


@endsection

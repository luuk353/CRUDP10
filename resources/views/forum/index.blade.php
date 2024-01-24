<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
</head>
<body>
<header class="top-0 p-3 text-right bg-black text-white">
    <nav>

        @if (Route::has('login'))
            @auth
                <a class="pr-7" href="{{ url('/dashboard') }}">Dashboard</a>
                <a class="pr-7" href="{{ url('/forum') }}">forum</a>
                <a class="pr-7" href="{{ url('/news') }}">news</a>
                <a class="pr-7" href="{{ url('/') }}">home</a>
                <a class="pr-7" href="{{ route('login') }}">Log in</a>
            @else
                <a class="pr-7" href="{{ url('/forum') }}">forum</a>
                <a class="pr-7" href="{{ url('/news') }}">news</a>
                <a class="pr-7" href="{{ url('/') }}">home</a>
                <a class="pr-7" href="{{ route('login') }}">Log in</a>


                @if (Route::has('register'))
                    <a class="pr-7" href="{{ route('register') }}" class="ml-2">Register</a>
                @endif

            @endauth
        @endif
    </nav>
</header>
<main>
    <div class="h-screen bg-gray-100">
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

                    @foreach ($forum as $post)
                        <div class="bg-gray-200 p-4 mb-4 rounded-lg">
                            <h3 class="text-lg font-bold mb-2">{{ $post->title }}</h3>
                            <p class="text-gray-800">{{ $post->text }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

</main>
<footer class="h-auto p-3 bg-black text-center">
    <p class="text-white">© 2023 - Potion Panic | ROC Nijmegen</p>
</footer>
</body>
</html>

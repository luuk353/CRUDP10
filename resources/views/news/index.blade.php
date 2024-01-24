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
    <div class="h-screen">
        <section class="flex justify-center items-center p-6 bg-gray-400 h-full">
            <div class="bg-white h-full w-1/3 flex flex-col items-center" item>
                <p class="text-xl font-bold">News</p>
                <div class="bg-black h-2 w-full mt-2">
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

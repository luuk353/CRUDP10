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


                        @if (Route::has('register'))
                            <a class="pr-7" href="{{ route('register') }}" class="ml-2">Register</a>
                        @endif
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
                <section class="flex justify-center p-6 bg-gray-400">
                    <img class="bg-auto" src="{{asset('images/main-screen.png')}}" alt="">
                </section>
                <div class="text-center bg-white p-6">
                    <h1 class="text-blue-600 text-8xl mb-10">Welkom bij potion panic</h1>
                    <div class="flex justify-between text-center text-white">
                        <div class="bg-green-500 w-1/4 p-4">
                            <p>blok1</p>
                        </div>
                        <div class="bg-yellow-500 w-1/4 p-4">
                            <p>blok2</p>
                        </div>
                        <div class="bg-purple-500 w-1/4 p-4">
                            <p>blok3</p>
                        </div>
                        <div class="bg-red-500 w-1/4 p-4">
                            <p>blok4</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="blok1" class="h-screen bg-green-500 text-white">
                <h1>Doei</h1>
            </div>
            <div class="h-screen bg-yellow-500 text-white flex">
                <h2>los</h2>
            </div>
            <div class="h-screen bg-purple-500 text-white flex">
                <h2>los</h2>
            </div>
            <div class="h-screen bg-red-500 text-white flex">
                <h2>loes</h2>
            </div>
        </main>
        <footer class="h-auto p-3 bg-black text-center">
            <p class="text-white">© 2023 - Potion Panic | ROC Nijmegen</p>
        </footer>
    </body>
</html>

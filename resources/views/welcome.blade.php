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
    <body class="min-w-full">
         <header class="top-0 p-3 text-right bg-black text-white">
            <nav>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-2">Register</a>
                        @endif

                    @endauth
                @endif    
            </nav>
        </header>  
        <main class="flex h-screen" style="background-image: url('{{ asset('images/main-screen.png') }}'); background-size: cover;">            
            <div class="text-center">
                <h1 class="text-blue-600">Welkom bij potion panic</h1>            
            </div>
        </main>
        <footer>
            <p class="bg-black p-3 text-center text-white">© 2023 - Potion Panic | ROC Nijmegen</p>
        </footer>
    </body>
</html>

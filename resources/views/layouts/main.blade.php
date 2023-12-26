<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<body>
    <header class="top-0 p-4 text-right bg-black from-purple-800 via-purple-600 to-purple-400 text-white animate-gradient shadow-md">
        <nav class="container mx-auto flex justify-end items-center space-x-4">
            @if (Route::has('login'))
                @auth
                    <a href="{{ route('welcome') }}" class="hover:text-blue-300 transition duration-300 transform hover:scale-105">Home</a>
                    @if (Auth::user()->admin == 1)
                        <a href="{{ route('admin.dashboard') }}" class="hover:text-blue-300 transition duration-300 transform hover:scale-105">Dashboard</a>
                    @else
                        <a href="{{ route('dashboard') }}" class="hover:text-blue-300 transition duration-300 transform hover:scale-105">Dashboard</a>
                    @endif
                    <a href="{{ route('reviews.index') }}" class="hover:text-blue-300 transition duration-300 transform hover:scale-105">Reviews</a>
                    <a href="{{ route('events.index') }}" class="hover:text-blue-300 transition duration-300 transform hover:scale-105">Events</a>
                    <a href="{{ route('profile.edit') }}" class="hover:text-blue-300 transition duration-300 transform hover:scale-105">Profiel</a>

                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <input type="submit" value="Log out" class="hover:text-blue-300 transition duration-300 transform hover:scale-105">
                    </form>
                @else
                    <a href="{{ route('login') }}" class="hover:text-blue-300 transition duration-300 transform hover:scale-105">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="hover:text-blue-300 transition duration-300 transform hover:scale-105">Register</a>
                    @endif
                @endauth
            @endif
        </nav>
    </header>

    @yield('content')

    <footer class="h-auto p-4 bg-black text-center bottom-0">
        <p class="text-white text-sm">© 2023 - Potion Panic | ROC Nijmegen</p>
    </footer>
</body>
</html>

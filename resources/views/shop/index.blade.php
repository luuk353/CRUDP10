<!DOCTYPE html>
<html lang="en">
<head>
@vite('resources/css/app.css', 'resources/js/app.js')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
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
<body class="bg-gray-200">
    <div class="bg-white rounded shadow p-6 max-w-md mx-auto">
        <h2 class="text-2xl font-bold mb-4 text-red-400">webshop</h2>
        <ul>
    
                    @foreach ($items as $item)

                        {{$item->itemName}}
                        <div class ="flex">
                        <p>€</p>{{$item->price}}
                        </div>
                        <div>
                            <img src="{{ asset($item->picture)}}" alt="Pic">
                            {{ asset($item->picture)}}
                        </div>
                        <div class = "mb-4">
                        <a href="{{ route('shop.show', $item->id) }}">
                            <div class="w-20 p-4 bg-red-400">
                                kopen
                            </div>
                        </a>
                        </div>
                    @endforeach
        </ul>
    </div>
</body>
</html>



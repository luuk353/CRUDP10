<header class="top-0 p-4 text-right bg-black from-purple-800 via-purple-600 to-purple-400 text-white animate-gradient shadow-md">
    <nav class="mx-auto flex justify-end items-center space-x-4">
        @if (Route::has('login'))
            @auth
                <a href="{{ route('welcome') }}" class="hover:text-blue-300 transition duration-300 transform hover:scale-105">Home</a>
                @if (Auth::user()->admin == 1)
                    <a href="{{ route('admin.dashboard') }}" class="hover:text-blue-300 transition duration-300 transform hover:scale-105">Dashboard</a>
                @else
                    <a href="{{ route('user.dashboard') }}" class="hover:text-blue-300 transition duration-300 transform hover:scale-105">Dashboard</a>
                @endif

                @if(Auth::user()->admin == 1)
                    <a href="{{ route('admin.reviews') }}" class="hover:text-blue-300 transition duration-300 transform hover:scale-105">Reviews</a>
                @else
                    <a href="{{ route('reviews.index') }}" class="hover:text-blue-300 transition duration-300 transform hover:scale-105">Reviews</a>
                @endif
                <a href="{{ route('events.index') }}" class="hover:text-blue-300 transition duration-300 transform hover:scale-105">Events</a>
                <a href="{{ route('highscore.index') }}" class="hover:text-blue-300 transition duration-300 transform hover:scale-105">Highscore</a>
                <a href="{{ url('/forum') }}" class="hover:text-blue-300 transition duration-300 transform hover:scale-105">Forum</a>
                <a href="{{ route('achievements.index') }}" class="hover:text-blue-300 transition duration-300 transform hover:scale-105">Achievement</a>
                <a href="{{ route('shop.index') }}" class="hover:text-blue-300 transition duration-300 transform hover:scale-105">Webshop</a>

                <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-11 h-11 rounded-full cursor-pointer" src="{{ asset('storage/images/' . Auth::user()->profilepic) }}" alt="{{ Auth::user()->profilepic }}">
                <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                        <div>{{ Auth::user()->name }}</div>
                        <div class="font-medium truncate">{{ Auth::user()->email }}</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                        @if (Auth::user()->admin == 1)
                            <li>
                                <a href="{{route('admin.dashboard')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                        @else
                            <li>
                                <a href="{{route('user.dashboard')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                        @endif
                        <li>
                            <a href="{{route('profile.edit')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                    </ul>
                    <div class="py-1 ">
                        <form action="{{route('logout')}}" method="post" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            @csrf
                            <input type="submit" value="Log out">
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="hover:text-blue-300 transition duration-300 transform hover:scale-105">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="hover:text-blue-300 transition duration-300 transform hover:scale-105">Register</a>
                @endif
            @endauth
        @endif
    </nav>
</header>

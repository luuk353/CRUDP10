<header
    class="animate-gradient top-0 bg-black from-purple-800 via-purple-600 to-purple-400 p-4 text-right text-white shadow-md">
    <nav class="mx-auto flex items-center justify-end space-x-4">
        @if (Route::has('login'))
            @auth
                <a href="{{ route('welcome') }}"
                    class="transform transition duration-300 hover:scale-105 hover:text-blue-300">Home</a>
                @if (Auth::user()->admin == 1)
                    <a href="{{ route('admin.dashboard') }}"
                        class="transform transition duration-300 hover:scale-105 hover:text-blue-300">Dashboard</a>
                @else
                    <a href="{{ route('user.dashboard') }}"
                        class="transform transition duration-300 hover:scale-105 hover:text-blue-300">Dashboard</a>
                @endif

                @if (Auth::user()->admin == 1)
                    <a href="{{ route('admin.reviews') }}"
                        class="transform transition duration-300 hover:scale-105 hover:text-blue-300">Reviews</a>
                @else
                    <a href="{{ route('reviews.index') }}"
                        class="transform transition duration-300 hover:scale-105 hover:text-blue-300">Reviews</a>
                @endif
                <a href="{{ route('events.index') }}"
                    class="transform transition duration-300 hover:scale-105 hover:text-blue-300">Events</a>
                <a href="{{ route('highscore.index') }}"
                    class="transform transition duration-300 hover:scale-105 hover:text-blue-300">Highscore</a>
                <a href="{{ url('/forum') }}"
                    class="transform transition duration-300 hover:scale-105 hover:text-blue-300">Forum</a>
                <a href="{{ route('achievements.index') }}"
                    class="transform transition duration-300 hover:scale-105 hover:text-blue-300">Achievement</a>
                <a href="{{ route('shop.index') }}"
                    class="transform transition duration-300 hover:scale-105 hover:text-blue-300">Webshop</a>
                <a href="{{ route('live-chat') }}"
                    class="transform transition duration-300 hover:scale-105 hover:text-blue-300">Live Chat</a>

                <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                    data-dropdown-placement="bottom-start" class="h-11 w-11 cursor-pointer rounded-full"
                    src="{{ asset('storage/images/' . Auth::user()->profilepic) }}" alt="{{ Auth::user()->profilepic }}">
                <div id="userDropdown"
                    class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:divide-gray-600 dark:bg-gray-700">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                        <div>{{ Auth::user()->name }}</div>
                        <div class="truncate font-medium">{{ Auth::user()->email }}</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                        @if (Auth::user()->admin == 1)
                            <li>
                                <a href="{{ route('admin.dashboard') }}"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('user.dashboard') }}"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                        @endif
                        <li>
                            <a href="{{ route('profile.edit') }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                    </ul>
                    <div class="py-1">
                        <form action="{{ route('logout') }}" method="post"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">
                            @csrf
                            <input type="submit" value="Log out">
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}"
                    class="transform transition duration-300 hover:scale-105 hover:text-blue-300">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="transform transition duration-300 hover:scale-105 hover:text-blue-300">Register</a>
                @endif
            @endauth
        @endif
    </nav>
</header>

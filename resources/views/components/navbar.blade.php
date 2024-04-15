<header
    class="animate-gradient top-0 bg-black from-purple-800 via-purple-600 to-purple-400 p-4 text-right text-white shadow-md">
    <nav class="mx-auto flex items-center justify-end space-x-4">
        @if (Route::has('login'))
            @auth
                <x-navlink href="/">
                    Home
                </x-navlink>
                @if (Auth::user()->admin == 1)
                    <x-navlink href=/admin/dashboard>
                        Dashboard
                    </x-navlink>
                @else
                    <x-navlink href=/user/dashboard>
                        Dashboard
                    </x-navlink>
                @endif

                @if (Auth::user()->admin == 1)
                    <x-navlink href=/admin/reviews>
                        Reviews
                    </x-navlink>
                @else
                    <x-navlink href=/reviews>
                        Reviews
                    </x-navlink>
                @endif
                <x-navlink href=/events>
                    Events
                </x-navlink>
                <x-navlink href=/highscore>
                    Highscore
                </x-navlink>
                <x-navlink href=/forum>
                    Forum
                </x-navlink>
                <x-navlink href=/achievements>
                    Achievement
                </x-navlink>
                <x-navlink href=/shop>
                    Webshop
                </x-navlink>
                <x-navlink href=/live-chat/index>
                    Live Chat
                </x-navlink>
                <section>
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
                                    <x-dropdown-navlink href=/admin/dashboard>
                                        Dashboard
                                    </x-dropdown-navlink>
                                </li>
                            @else
                                <li>
                                    <x-dropdown-navlink href=/user/dashboard>
                                        Dashboard
                                    </x-dropdown-navlink>
                                </li>
                            @endif
                            <li>
                                <x-dropdown-navlink href=/profile>
                                    Settings
                                </x-dropdown-navlink>
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
                </section>
            @else
                <x-navlink href=/login>
                    Login
                </x-navlink>

                @if (Route::has('register'))
                    <x-navlink href=/register>
                        Register
                    </x-navlink>
                @endif
            @endauth
        @endif
    </nav>
</header>

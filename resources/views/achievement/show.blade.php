<x-section.main class="from-red-600 via-orange-400 to-yellow-200">
    <x-section.main-tekst>
        Mijn achievements!
    </x-section.main-tekst>
    <x-section.button-actie href=/achievements class="bg-cyan-500 hover:bg-indigo-500">
        Terug naar index!
    </x-section.button-actie>
    <div class="flex justify-center">
        <x-section.card class="border-black bg-white">
            <div class="mb-4 flex items-center justify-between space-x-4">
                <h5 class="text-l font-bold leading-none text-gray-900 dark:text-white">Deze gebruikers hebben deze
                    achievement!</h5>
                <p class="text-sm font-medium">
                    Aantal: {{ $user_achievements->count() }}
                </p>
            </div>
            <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($user_achievements as $user)
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="h-8 w-8 rounded-full"
                                        src="{{ asset('storage/images/' . $user->user->profilepic) }}" alt="Neil image">
                                </div>
                                <div class="ms-4 min-w-0 flex-1">
                                    <p class="truncate text-sm font-medium text-gray-900 dark:text-white">
                                        {{ $user->user->name }}
                                    </p>
                                    <p class="truncate text-sm text-gray-500 dark:text-gray-400">
                                        {{ $user->user->email }}
                                    </p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            </x-section-card>
    </div>
</x-section.main>
<div class="flex justify-center">
    <div
        class="w-full max-w-md rounded-lg border border-gray-200 bg-white p-4 shadow dark:border-gray-700 dark:bg-gray-800 sm:p-8">

    </div>
</div>

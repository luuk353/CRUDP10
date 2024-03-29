@extends('layouts.main')

@section('content')
    <main class="min-h-screen bg-gradient-to-l from-red-600 via-orange-400 to-yellow-200 p-8">
        <div class="text-white font-bold text-5xl text-center mb-8">
            Mijn achievements!
        </div>
        <div class="flex justify-center mb-4">
            <a href="{{ route('achievements.index') }}" class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                Terug naar de index
            </a>
        </div>
        <div class="flex justify-center">
            <div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center justify-between mb-4">
                    <h5 class="text-l font-bold leading-none text-gray-900 dark:text-white">Deze gebruikers hebben deze achievement!</h5>
                    <p class="text-sm font-medium">
                        Aantal: {{ $user_achievements->count() }}
                    </p>
                </div>
                <div class="flow-root">
                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach($user_achievements as $user)
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="{{ asset('storage/images/' . $user->user->profilepic) }}" alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            {{ $user->user->name }}
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            {{ $user->user->email }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection

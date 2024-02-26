@extends('layouts.main')

@section('content')
    <main>
        <div class="min-h-screen bg-gradient-to-l from-gray-800 via-slate-700 to-zinc-600 p-4 max-w-full">
            <div class="text-white font-semibold text-4xl text-center">
                <h1>User dashboard!</h1>
            </div>
            <div class="text-center my-2 text-2xl text-white">
                <h2>Welkom {{auth()->user()->name}}</h2>
            </div>
            {{--reviews--}}
            <div class="flex gap-3">
                <div class="bg-red-700 p-4 rounded-lg w-1/6 text-center text-1xl font-semibold">
                    <div class="flex justify-between">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z"/>
                        </svg>
                        <p>
                            <span class="mx-auto text-white">Review: {{$reviews}}</span>
                        </p>
                    </div>
                </div>
            </div>
            {{--highscore--}}
            <div class="flex gap-3 mt-2">
                <div class="bg-orange-500 p-4 rounded-lg w-1/6 text-center text-1xl font-semibold">
                    <div class="flex justify-between">
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 18">
                            <path d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                        </svg>
                        <p>
                            <span class="mx-auto text-white">Highscore: {{$highscores}}</span>
                        </p>
                    </div>
                </div>
            </div>
            {{--achievements--}}
            <div class="flex gap-3 mt-2">
                <div class="bg-yellow-300 p-4 rounded-lg w-1/6 text-center text-1xl font-semibold">
                    <div class="flex justify-between">
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M15 9.7h4a2 2 0 0 1 1.6.9 2 2 0 0 1 .3 1.8l-2.4 7.2c-.3.9-.5 1.4-1.9 1.4-2 0-4.2-.7-6.1-1.3L9 19.3V9.5A32 32 0 0 0 13.2 4c.1-.4.5-.7.9-.9h1.2c.4.1.7.4 1 .7l.2 1.3L15 9.7ZM4.2 10H7v8a2 2 0 1 1-4 0v-6.8c0-.7.5-1.2 1.2-1.2Z" clip-rule="evenodd"/>
                        </svg>
                        <p>
                            <span class="mx-auto text-white">Achievements: {{$achievements}}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

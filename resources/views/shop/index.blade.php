@extends('layouts.main')

@section('content')
<main>
    <div class="min-h-screen bg-gradient-to-l from-pink-500 via-indigo-600- to-teal-500 p-8">
        <div class="text-white font-bold text-5xl text-center mb-8">
            Welkom bij de webshop pagina!
        </div>
        <div class="flex justify-center mb-4">
            @if (Auth::user()->admin == 1)
                <a href="{{ route('shop.createproduct') }}" class="bg-emerald-400 hover:bg-emerald-600 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                    Voeg een product toe!
                </a>
            @endif
        </div>
        @include('components.flash')
        @if(!count($items) > 1)
        <div class="flex flex-wrap justify-center mt-6 w-max-full h-auto gap-4">
            @foreach($items as $item)
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-2xl shadow-red-500/50 dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{route('shop.show', $item->id)}}" class="w-auto h-auto block">
                        <img class="rounded-t-lg object-cover w-full" src="{{ asset('storage/images/' . $item->picture) }}" alt="{{$item->picture}}" />
                    </a>
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$item->itemName}}</h5>
                        <p class="mb-3 font-medium text-lg text-gray-700 dark:text-gray-400">Aantal: <span class="font-normal">{{$item->amount}}</span></p>
                        <p class="mb-3 font-medium text-lg text-gray-700 dark:text-gray-400">Prijs: <span class="font-normal">{{$item->price}}</span></p>
                        <a href="{{route('shop.show', $item->id)}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Kopen
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        @else
            @if(!auth()->user()->admin == 1)
                <h1 class="text-center text-2xl text-white">Er zijn nog geen producten!!!</h1>
            @else
                <h1 class="text-center text-2xl text-white">Er zijn nog geen producten!!!</h1>
            @endif
        @endif
    </div>
</main>
@endsection

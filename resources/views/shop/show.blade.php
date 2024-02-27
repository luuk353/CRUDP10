@extends('layouts.main')

@section('content')
<main>
    <div class="min-h-screen bg-gradient-to-l from-pink-500 via-indigo-600- to-teal-500 p-8">
        <div class="max-w-2xl mx-auto my-8 px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold text-white mb-8">Product bestellen!</h1>
            <div class="mb-8">
                <a href="{{ route('shop.index') }}" class="inline-block bg-emerald-400 hover:bg-emerald-600 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                    Terug naar de index
                </a>
            </div>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="mb-4 bg-black p-4 rounded text-white">{{$error}}</div>
                @endforeach
            @endif

            <div class="bg-gray-800 p-8 rounded-md shadow-2xl shadow-red-500/50">
                <form action="{{route('shop.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="inventory_id" value="{{$shopitem->id}}">
                    <p class="text-white mb-4">Wil je dit product bestellen?</p>
                    <h2 class="text-white mb-4">{{$shopitem->itemName}}</h2>
                    <button type="submit" class="text-white bg-gradient-to-l from-emerald-400 via-emerald-500 to-emerald-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 ">Bestellen</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection

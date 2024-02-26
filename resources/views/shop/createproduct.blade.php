@extends('layouts.main')

@section('content')
<main>
    <div class="min-h-screen bg-gradient-to-l from-pink-500 via-indigo-600- to-teal-500 p-8">
        <div class="max-w-2xl mx-auto my-8 px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold text-white mb-8">Maak een product!</h1>
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

            <div class="bg-gray-800 p-8 rounded-md shadow-md">
                <form action="{{route('shop.storeproduct')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="itemName" class="block text-gray-200 text-sm font-bold mb-2">Product naam *</label>
                        <input type="text" name="itemName" id="itemName" class="border rounded w-full py-2 px-3 bg-gray-700 text-white focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200" value="{{old('itemName')}}" placeholder="T-shirt!">
                    </div>
                    <div class="mb-4">
                        <label for="price" class="block text-gray-200 text-sm font-bold mb-2">Prijs *</label>
                        <input type="number" name="price" step="0.01" min="0" max="1000000" class="border rounded w-full py-2 px-3 bg-gray-700 text-white focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200" value="{{old('price')}}" placeholder="12.99">
                    </div>
                    <div class="mb-4">
                        <label for="amount" class="block text-gray-200 text-sm font-bold mb-2">Aantal *</label>
                        <input type="number" name="amount" step="1" min="0" max="1000000" class="border rounded w-full py-2 px-3 bg-gray-700 text-white focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200" value="{{old('amount')}}" placeholder="100">
                    </div>
                    <div class="mb-4">
                        <label for="picture" class="block text-gray-200 text-sm font-bold mb-2">Product foto</label>
                        <input type="file" name="picture" id="picture" class="border rounded w-full bg-gray-700 text-white focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200" value="{{old('picture')}}">
                    </div>
                    <button type="button" class="text-white bg-gradient-to-l from-emerald-400 via-emerald-500 to-emerald-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 ">Verstuur</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection

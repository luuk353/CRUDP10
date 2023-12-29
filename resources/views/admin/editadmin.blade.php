@extends('layouts.main')

@section('content')

<main>
    <div class="bg-gradient-to-l from-gray-800 via-slate-700 to-zinc-600 py-8 h-screen">
        <div class="max-w-2xl mx-auto my-8 px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold text-white mb-8">Admin aanpassen!</h1>
            <div class="mb-8">
                <a href="{{ route('reviews.index') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                    Terug naar de index
                </a>
            </div>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="mb-4 bg-black p-4 rounded text-white">{{$error}}</div>
                @endforeach
            @endif

            <div class="bg-gray-800 p-8 rounded-md shadow-md">
                <form action="{{ route('admin.update', $admin->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="name" class="block text-white text-sm font-bold mb-2">Gebruikersnaam</label>
                        <input type="text" name="name" id="email" value="{{old('name', $admin->name)}}" class="border rounded w-full py-2 px-3 bg-gray-700 text-white focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200" placeholder="Henk">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-white text-sm font-bold mb-2">Email</label>
                        <input type="email" name="email" id="email" value="{{old('email', $admin->email)}}" class="border rounded w-full py-2 px-3 bg-gray-700 text-white focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200" placeholder="email@email.com">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-white text-sm font-bold mb-2">Wachtwoord</label>
                        <input type="password" name="password" id="password" class="border rounded w-full py-2 px-3 bg-gray-700 text-white focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200" value="{{old('password')}}" placeholder="Als je de wachtwoord niet wilt aanpassen, laat het gewoon leeg staan!">
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:scale-105">Verstuur</button>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection

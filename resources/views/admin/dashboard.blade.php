@extends('layouts.main')

@section('content')

<main>
    <div class="min-h-screen bg-gradient-to-l from-gray-800 via-slate-700 to-zinc-600 p-4 max-w-full">
        <div class="text-white font-bold text-4xl text-center">
            <h1>Admin dashboard!</h1>
        </div>
        <div class="mb-8 flex">
            <a href="{{ route('admin.index') }}" class="bg-emerald-500 hover:bg-emerald-700 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                Ga naar de admin pagina!
            </a>
            <a href="{{route('admin.create')}}" class="mx-3 bg-emerald-500 hover:bg-emerald-700 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                Maak een nieuwe admin aan!
            </a>
        </div>
    </div>
</main>

@endsection

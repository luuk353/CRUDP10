@extends('layouts.main')

@section('content')

<main>
    <div class="min-h-screen bg-gradient-to-l from-gray-800 via-slate-700 to-zinc-600 p-4 max-w-full">
        <div class="text-white font-bold text-4xl text-center">
            <h1>Welkom bij de admin pagina!</h1>
        </div>
        <div class="mb-8 flex">
            <a href="{{ route('admin.dashboard') }}" class="bg-emerald-500 hover:bg-emerald-700 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                Ga naar dashboard!
            </a>
            <a href="{{route('admin.create')}}" class="mx-3 bg-emerald-500 hover:bg-emerald-700 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                Maak een nieuwe admin aan!
            </a>
        </div>
        @include('components.flash')
        @foreach ($admins as $admin)
        <div class="flex flex-wrap justify-center mt-6 w-auto">
            <div class="bg-gray-900 h-2/5 w-4/5 text-white rounded-lg p-6">
                <h2 class="text-2xl font-bold text-center">Naam admin: {{$admin->name}}</h2>
                <p class="font-bold my-2">Email admin: <span class="indent-8">{{$admin->email}}</span></p>
                <div class="flex mt-2 flex-wrap">
                    <p class="bg-sky-500 p-2 rounded-md w-auto text-center"><a href="{{route('admin.show', $admin->id)}}">Bekijk admin</a></p>
                    <p class="bg-yellow-500 p-2 rounded-md mx-3 w-auto text-center"><a href="{{route('admin.edit', $admin->id)}}">Pas admin aan</a></p>
                    <form action="{{ route('admin.destroy', $admin->id) }}" method="post" class="bg-red-500 p-2 rounded-md w-auto text-center">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Verwijder admin</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</main>

@endsection

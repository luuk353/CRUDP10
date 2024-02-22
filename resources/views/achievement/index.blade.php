@extends('layouts.main')

@section('content')
    <main class="min-h-screen bg-gradient-to-l from-red-600 via-orange-400 to-yellow-200 p-8">
        <div class="text-white font-bold text-5xl text-center mb-8">
            Welkom bij de achievement pagina!
        </div>
        <div class="flex justify-center mb-4">
            @if (Auth::user()->admin == 1)
                <a href="{{ route('achievements.create') }}" class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                    Voeg een achievement toe!
                </a>
            @else
                <a href="{{ route('achievements.user') }}" class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                    Mijn achievements!
                </a>
            @endif
        </div>
        @foreach ($achievements as $achievement)
            <div class="flex flex-wrap justify-center mt-6 w-auto">
                <div class="bg-gray-900 h-2/5 w-4/5 text-white rounded-lg p-6">
                    <h2 class="text-2xl font-bold text-center">Naam achievement: {{$achievement->name}}</h2>
                    <p class="font-bold my-2">Beschrijving achievement: <span class="indent-8">{{$achievement->description}}</span></p>
                    <div class="flex mt-2 flex-wrap">
                        <p class="bg-sky-500 p-2 rounded-md w-auto text-center"><a href="{{route('achievements.show', $achievement->id)}}">Bekijk achievement</a></p>
                        @if(Auth()->user()->admin == 1)
                            <p class="bg-yellow-500 p-2 rounded-md mx-3 w-auto text-center"><a href="{{route('achievements.edit', $achievement->id)}}">Pas achievement aan</a></p>
                            <form action="{{route('achievements.destroy', $achievement->id)}}" method="post" class="bg-red-500 p-2 rounded-md w-auto text-center">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Verwijder achievement">
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </main>
@endsection

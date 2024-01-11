@extends('layouts.main')

@section('content')

<main>
    <div class="min-h-screen bg-gradient-to-l from-emerald-400 via-green-400 to-cyan-600 p-4 max-w-full">
        <div>
            <img class="w-3/5 h-auto mb-4" src="{{ asset('images/' . $event->event_foto) }}" alt="{{ $event->event_naam }}">
        </div>

    </div>
</main>

@endsection

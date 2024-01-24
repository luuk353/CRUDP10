<x-app-layout>
    <x-slot name="header">
        <h1>Forum Create</h1>
    </x-slot>

    <form action="{{route('forums.store')}}" method="post">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="text">Message:</label>
            <textarea name="message" id="message"></textarea>
        </div>
        <button type="submit">Create Forum Post</button>
    </form>
</x-app-layout>

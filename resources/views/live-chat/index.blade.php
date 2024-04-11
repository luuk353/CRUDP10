@extends('layouts.main')

@section('content')
    <main class="flex min-h-screen justify-center bg-gradient-to-l from-amber-300 via-pink-700 to-slate-600 p-12">
        <div class="chat w-full max-w-xl rounded-lg bg-white p-6 shadow-lg">
            <div class="top mb-4 flex items-center">
                <img src="https://assets.edlin.app/images/rossedlin/03/rossedlin-03-100.jpg" alt="Avatar"
                    class="mr-4 h-12 w-12 rounded-full">
                <div>
                    <p class="text-xl font-bold">Ross Edlin</p>
                    <small class="text-gray-600">Online</small>
                </div>
            </div>
            <div id="messageContainer" class="messages min-h-screen overflow-y-auto">
                <!-- Hier worden de ontvangen berichten weergegeven -->
            </div>

            <div class="bottom mt-4">
                <form class="flex">
                    <input type="text" id="message" name="message" placeholder="Enter message..." autocomplete="off"
                        class="flex-1 rounded-l-md border border-gray-300 px-4 py-2 focus:border-blue-500 focus:outline-none">
                    <button type="submit" class="ml-2 rounded-r-md bg-blue-500 px-4 py-2 text-white">Submit</button>
                </form>
            </div>
        </div>
    </main>


    <script>
        const pusher = new Pusher('{{ config('broadcasting.connections.pusher.key') }}', {
            cluster: 'eu'
        });
        const channel = pusher.subscribe('public');

        //Receive messages
        channel.bind('chat', function(data) {
            $.post("/live-chat/receive", {
                    _token: '{{ csrf_token() }}',
                    message: data.message,
                })
                .done(function(res) {
                    console.log(data);
                    $(".messages").append(res); // Voeg ontvangen bericht toe aan container
                    $(document).scrollTop($(document).height());
                });
        });



        //Broadcast messages
        $("form").submit(function(event) {
            event.preventDefault();

            $.ajax({
                url: "/live-chat/broadcast",
                method: 'POST',
                headers: {
                    'X-Socket-Id': pusher.connection.socket_id
                },
                data: {
                    _token: '{{ csrf_token() }}',
                    message: $("form #message").val(),
                }
            }).done(function(res) {
                $(".messages > .message").last().after(res);
                $(".messages").append(res);
                $("form #message").val('');
                $(document).scrollTop($(document).height());
            });
        });
    </script>
@endsection

@extends('layouts.main')

@section('content')
    <main class="flex min-h-screen justify-center bg-gradient-to-l from-amber-300 via-pink-700 to-slate-600 p-12">
        <div class="chat w-full max-w-xl rounded-lg bg-white p-6 shadow-lg">
            <div class="top mb-4 flex items-center">
                <img src="{{ asset('images/1705499654.png') }}" alt="Avatar" class="mr-4 h-12 w-12 rounded-full">
                <div>
                    <p class="text-xl font-bold">Quincy Berkleef</p>
                    <div class="flex space-x-1">
                        <small class="text-gray-600">Online
                        </small><svg class="h-6 w-6 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
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

<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        @vite('resources/css/app.css', 'resources/js/app.js')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order Form</title>
    </head>
    <body>
        <div class="text-black">
            <h1>Order Item</h1>
            <h2>{{ $shopitem->itemName }}</h2>
            
            <p>Please fill in your details:</p>
            
            <form action="{{ route('shop.store') }}" method="post">
                @csrf    
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <input type="hidden" name="itemName" value="{{ $shopitem->itemName }}">
                <input type="hidden" name="price" value="{{ $shopitem->price }}">
                <input type="hidden" name="amount" value="{{ $shopitem->amount }}">
                <input type="submit" value="Order">
            </form>    
        </div>
    </body>
    </html>
</x-app-layout>

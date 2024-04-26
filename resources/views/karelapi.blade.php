<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200">
    
    <div class="flex gap-3 mx-auto px-4 py-8 flex-col">
        <h1 class="text-3xl font-semibold mb-8 text-center">Karel's API info</h1>
        <div class="bg-sky-400 w-[400px] h-[100px] flex">
            <a href="/" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 active:bg-blue-700 transition duration-150 ease-in-out">
                Back
            </a>
        </div>
        @foreach ($themes as $theme)
            <div class="bg-white shadow overflow-hidden sm:rounded-lg flex gap-4 flex-row">
                <img src="{{ $theme['image'] }}" alt="{{ $theme['name'] }}" class="h-64 object-cover">
                <div class="px-4 py-2">
                    <h2 class="text-lg font-semibold">{{ $theme['name'] }}</h2>
                    <p class="text-gray-600">Author: {{ $theme['author'] }}</p>
                    <p class="text-gray-600">Tracks: {{ $theme['tracks'] }}</p>
                    <p class="text-gray-600">Price: ${{ $theme['price'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
    <div class="flex flex-col items-center justify-center gap-4 mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold mb-8 text-center w-full">Karel's API info</h1>
        <div class="bg-sky-400 w-[400px] h-[100px] flex">
            <a href="/" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 active:bg-blue-700 transition duration-150 ease-in-out">
                Back
            </a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            @foreach ($themes as $theme)
                <div class="bg-white shadow overflow-hidden sm:rounded-lg flex gap-4 flex-row">
                    <div class="transform transition-transform duration-300 hover:scale-110 cursor-pointer">
                        <img src="{{ $theme['image'] }}" alt="{{ $theme['name'] }}" class="h-64 object-cover">
                    </div>
                    <div class="px-4 py-2">
                        <h2 class="text-lg font-semibold">{{ $theme['name'] }}</h2>
                        <p class="text-gray-600">Author: {{ $theme['author'] }}</p>
                        <p class="text-gray-600">Tracks: {{ $theme['tracks'] }}</p>
                        <p class="text-gray-600">Price: ${{ $theme['price'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>

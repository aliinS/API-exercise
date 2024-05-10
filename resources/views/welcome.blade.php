<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200">

    <div class="mx-auto px-4 py-8">
        <div class="justify-between items-center text-center mb-12">
            <h1 class="text-3xl font-semibold ">Welcome to Aliin's API ex.</h1>
        </div>

        <div class="flex justify-center">
            <div class="mb-10 flex flex-col w-40 gap-3">
                <a href="{{ route('themes') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Karel's API</a>
                <a href="{{ route('garden-tools.create') }}"
                    class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Tool</a>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 justify-items-center">
            @foreach ($gardenTools as $tool)
                <div class="border flex rounded-lg overflow-hidden bg-white shadow-md justify-between w-2/3 transform transition-transform duration-300 hover:scale-110 cursor-pointer">
                    <div class="p-4 grid grid-cols-2 gap-4">
                        <div class="col-span-2 text-lg font-bold text-gray-900 capitalize">{{ $tool->title }}</div>
                        <div class="col-span-2 text-sm text-gray-900">{{ $tool->description }}</div>
                        <div class="col-span-2 text-sm text-gray-900">{{ $tool->brand }}</div>
                        <div class="col-span-2 text-lg text-gray-900">Price: ${{ $tool->price }}</div>
                    </div>
                    <div class="flex items-center mr-4">
                        @if ($tool->image)
                            <img src="{{ $tool->image }}" alt="{{ $tool->title }}" class="w-32 h-32 object-cover rounded-md ">
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>

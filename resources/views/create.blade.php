<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Garden Tool</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold mb-10 text-center">Add new garden tool</h1>


        <form action="{{ route('garden-tools.store') }}" method="POST"
            class="max-w-md mx-auto bg-gray-100 rounded-lg shadow-md overflow-hidden">
            @csrf

            <div class="flex flex-col gap-4 p-6">
                <div class="">
                    <label for="title" class="text-gray-700">Title:</label>
                    <input type="text" name="title" id="title" class="mt-1 h-8 form-input rounded-md w-full">
                </div>

                <div>
                    <label for="description" class="text-gray-700">Description:</label>
                    <textarea name="description" id="description" rows="3"
                        class="mt-1 form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 rounded-md shadow-sm"></textarea>
                </div>

                <div>
                    <label for="price" class="text-gray-700">Price:</label>
                    <input type="text" name="price" id="price"
                        class="mt-1 h-8 form-input rounded-md shadow-sm w-full">
                </div>

                <div>
                    <label for="brand" class="text-gray-700">Brand:</label>
                    <input type="text" name="brand" id="brand"
                        class="mt-1 h-8 form-input rounded-md shadow-sm w-full">
                </div>

                <div>
                    <label for="image" class="text-gray-700">Image URL:</label>
                    <input type="text" name="image" id="image"
                        class="mt-1 h-8 form-input rounded-md shadow-sm w-full">
                </div>

                <div class="flex justify-between">
                    <a href="{{ route('index') }}"
                        class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-red-400 hover:bg-red-300 focus:outline-none focus:border-red-600 focus:shadow-outline-indigo active:bg-red-600 transition duration-150 ease-in-out">
                        Cancel
                    </a>

                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        Submit
                    </button>
                </div>
            </div>
        </form>



    </div>
</body>

</html>

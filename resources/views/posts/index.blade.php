<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Data from Tables with Relationships</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-8 text-center">
            <span class="text-red-500">SEARCH</span> DATA FROM TABLES WITH RELATIONSHIPS
        </h1>

        <!-- Search Form -->
        <div class="mb-8">
            <form action="{{ route('posts.search') }}" method="GET" class="flex items-center space-x-4">
                <input 
                    type="text" 
                    name="keyword" 
                    placeholder="search" 
                    value="{{ request('keyword') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                >
                <button 
                    type="submit" 
                    class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Search
                </button>
            </form>
        </div>

        <!-- Results Table -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">POST ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">POST TITLE</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">CATEGORY NAME</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">USER NAME</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">POST DESCRIPTION</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($posts as $post)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $post->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $post->title }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $post->category->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $post->user->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $post->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
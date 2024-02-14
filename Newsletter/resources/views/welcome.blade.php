<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased bg-gray-100 dark:bg-gray-900">
    <div class="min-h-screen flex flex-col justify-center items-center">
        @if (Route::has('login'))
            <div class="absolute top-0 right-0 p-6">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline mr-4">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6 w-full max-w-lg">
            <h6 class="text-lg font-semibold text-gray-900 dark:text-white mb-4 flex justify-center items-center">
                <svg class="h-6 w-6 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Subscribe to the newsletter
            </h6>
                <form action="/subscribe" method="post">
                    @csrf
                <div class="flex items-center space-x-3">
                <input type="email" name="email" placeholder="Enter email address" class="form-control flex-1 py-2 px-4 rounded-lg border border-gray-300">
                <button type="submit" class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">OK</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

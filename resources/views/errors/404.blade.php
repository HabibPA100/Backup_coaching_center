<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center">
        <h1 class="text-6xl font-bold text-gray-800">404</h1>
        <p class="text-xl text-gray-600 mt-2">Oops! The page you're looking for doesn't exist.</p>
        <a href="{{ url('/') }}" class="mt-6 inline-block bg-blue-600 text-white px-6 py-3 rounded-lg text-lg font-medium hover:bg-blue-700 transition">
            Go Home
        </a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Laravel Website' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900">

    <!-- Navbar -->
    <header class="bg-white shadow">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <!-- Logo -->
            <a href="/" class="text-2xl font-bold text-blue-600">MySite</a>

            <!-- Navigation -->
            <nav class="space-x-6">
                <a href="/" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
                <a href="/about" class="text-gray-700 hover:text-blue-600 font-medium">About</a>
                <a href="/contact" class="text-gray-700 hover:text-blue-600 font-medium">Contact</a>
                <a href="/jobs" class="text-gray-700 hover:text-blue-600 font-medium">Jobs</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-blue-600 text-white py-16">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-extrabold mb-4">{{ $heading ?? 'Welcome to My Website' }}</h1>
            <p class="text-lg text-blue-100">A simple Laravel project with Blade and Tailwind CSS.</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-10">
        <div class="bg-white rounded-lg shadow p-6">
            {{ $slot }}
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-300 py-6 mt-10">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} MySite. Built with Laravel + Tailwind.</p>
        </div>
    </footer>

</body>
</html>

@extends('layouts.app')

@section('content')
<!-- Responsive Navbar -->
<nav class="bg-primary dark:bg-gray-800 text-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="/" class="text-2xl font-bold tracking-tight">UniHub</a>
        <div class="hidden md:flex space-x-6 items-center">
            <a href="/" class="hover:text-secondary transition duration-300">Home</a>
            <a href="/faculty-reviews" class="hover:text-secondary transition duration-300">Faculty Reviews</a>
            <a href="/resource-hub" class="hover:text-secondary transition duration-300">Resource Hub</a>
            <a href="/cgpa-tracker" class="hover:text-secondary transition duration-300">CGPA Tracker</a>
            <a href="/user-profile" class="hover:text-secondary transition duration-300">Profile</a>
            <a href="/dashboard" class="hover:text-secondary transition duration-300">Dashboard</a>
            <button id="theme-toggle" class="p-2 rounded-full hover:bg-secondary transition">
                <!-- SVGs unchanged -->
            </button>
        </div>
        <button class="md:hidden focus:outline-none" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
            <!-- SVG unchanged -->
        </button>
    </div>
    <div id="mobile-menu" class="hidden md:hidden bg-primary dark:bg-gray-800 transition-all duration-300 ease-in-out">
        <a href="/" class="block px-4 py-2 hover:bg-secondary hover:text-white transition duration-300">Home</a>
        <a href="/faculty-reviews" class="block px-4 py-2 hover:bg-secondary hover:text-white transition duration-300">Faculty Reviews</a>
        <a href="/resource-hub" class="block px-4 py-2 hover:bg-secondary hover:text-white transition duration-300">Resource Hub</a>
        <a href="/cgpa-tracker" class="block px-4 py-2 hover:bg-secondary hover:text-white transition duration-300">CGPA Tracker</a>
        <a href="/user-profile" class="block px-4 py-2 hover:bg-secondary hover:text-white transition duration-300">Profile</a>
        <a href="/dashboard" class="block px-4 py-2 hover:bg-secondary hover:text-white transition duration-300">Dashboard</a>
        <button id="mobile-theme-toggle" class="block px-4 py-2 w-full text-left hover:bg-secondary hover:text-white transition duration-300">Toggle Theme</button>
    </div>
</nav>

<!-- Interactive Landing Page -->
<section class="flex-grow min-h-screen bg-gradient-to-br from-primary to-indigo-700 dark:from-gray-800 dark:to-gray-600 flex flex-col justify-center items-center text-white">
    <header class="text-center px-4 animate-fade-in">
        <h1 class="text-5xl md:text-7xl font-extrabold mb-6 tracking-tight">Welcome to UniHub</h1>
        <p class="text-xl md:text-3xl mb-10 max-w-2xl mx-auto animate-slide-up">Your ultimate platform for faculty reviews, shared resources, and CGPA tracking. Join thousands of students and faculty!</p>
        <div class="space-x-4">
            @guest
                <a href="{{ route('login') }}" class="bg-secondary text-primary px-8 py-4 rounded-full font-semibold text-lg hover:bg-yellow-300 transition transform hover:scale-105 shadow-lg dark:bg-yellow-400 dark:hover:bg-yellow-500">Log In</a>
                <a href="{{ route('register') }}" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-primary transition transform hover:scale-105 shadow-lg dark:border-gray-300 dark:hover:bg-gray-300 dark:hover:text-gray-900">Sign Up</a>
            @else
                <a href="{{ route('dashboard') }}" class="bg-secondary text-primary px-8 py-4 rounded-full font-semibold text-lg hover:bg-yellow-300 transition transform hover:scale-105 shadow-lg dark:bg-yellow-400 dark:hover:bg-yellow-500">Go to Dashboard</a>
            @endguest
        </div>
    </header>
    <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl animate-slide-up">
        <div class="bg-white bg-opacity-20 p-6 rounded-xl backdrop-blur-md hover:bg-opacity-30 transition duration-300">
            <h3 class="text-xl font-semibold">Explore Reviews</h3>
            <p class="text-sm mt-2">Discover insights from peers about faculty and courses.</p>
        </div>
        <div class="bg-white bg-opacity-20 p-6 rounded-xl backdrop-blur-md hover:bg-opacity-30 transition duration-300">
            <h3 class="text-xl font-semibold">Share Resources</h3>
            <p class="text-sm mt-2">Access and contribute to a rich library of study materials.</p>
        </div>
        <div class="bg-white bg-opacity-20 p-6 rounded-xl backdrop-blur-md hover:bg-opacity-30 transition duration-300">
            <h3 class="text-xl font-semibold">Track Progress</h3>
            <p class="text-sm mt-2">Monitor your CGPA with our intuitive tracker.</p>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-primary dark:bg-gray-800 text-white py-8">
    <div class="container mx-auto px-4">
        <div class="flex flex-col items-center">
            <h3 class="text-xl font-bold mb-2 tracking-tight">UniHub</h3>
            <p class="text-sm mb-4">Empowering your academic journey</p>
        </div>
        <div class="mt-6 text-center text-sm">
            <p>© 2025 UniHub. All rights reserved.</p>
        </div>
    </div>
</footer>

<script>
    const toggleTheme = () => {
        document.documentElement.classList.toggle('dark');
        localStorage.setItem('theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
    };
    document.getElementById('theme-toggle').addEventListener('click', toggleTheme);
    document.getElementById('mobile-theme-toggle').addEventListener('click', toggleTheme);
    if (localStorage.getItem('theme') === 'dark') document.documentElement.classList.add('dark');
</script>
@endsection

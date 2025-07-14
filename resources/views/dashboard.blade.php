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

<!-- Interactive Dashboard Page -->
<section class="flex-grow py-16 bg-gradient-to-b from-gray-100 to-gray-200 dark:from-gray-900 dark:to-gray-700">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-extrabold text-center mb-12 text-primary dark:text-white animate-fade-in">Dashboard</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition transform hover:-translate-y-1 animate-slide-up">
                <h3 class="text-xl font-semibold mb-4 text-primary dark:text-white">Manage Users</h3>
                <ul class="space-y-4">
                    <li class="flex justify-between items-center">
                        <span class="text-gray-700 dark:text-gray-300">John Smith (Student)</span>
                        <div class="space-x-3">
                            <button class="text-primary hover:text-secondary font-medium transition dark:text-white dark:hover:text-yellow-400">Edit</button>
                            <button class="text-red-600 hover:text-red-800 font-medium transition dark:text-red-400 dark:hover:text-red-300">Delete</button>
                        </div>
                    </li>
                    <!-- Add more users dynamically -->
                </ul>
                <button class="mt-4 text-accent hover:text-green-700 font-medium transition dark:text-green-400 dark:hover:text-green-300">View All Users</button>
            </div>
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition transform hover:-translate-y-1 animate-slide-up">
                <h3 class="text-xl font-semibold mb-4 text-primary dark:text-white">Moderate Resources</h3>
                <ul class="space-y-4">
                    <li class="flex justify-between items-center">
                        <span class="text-gray-700 dark:text-gray-300">Lecture Notes - Week 5</span>
                        <div class="space-x-3">
                            <button class="text-primary hover:text-secondary font-medium transition dark:text-white dark:hover:text-yellow-400">Approve</button>
                            <button class="text-red-600 hover:text-red-800 font-medium transition dark:text-red-400 dark:hover:text-red-300">Delete</button>
                        </div>
                    </li>
                    <!-- Add more resources dynamically -->
                </ul>
                <button class="mt-4 text-accent hover:text-green-700 font-medium transition dark:text-green-400 dark:hover:text-green-300">View All Resources</button>
            </div>
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition transform hover:-translate-y-1 animate-slide-up">
                <h3 class="text-xl font-semibold mb-4 text-primary dark:text-white">Analytics</h3>
                <p class="text-gray-700 dark:text-gray-300">Active Users: <span class="font-semibold">1,234</span></p>
                <p class="text-gray-700 dark:text-gray-300 mt-2">Resources Uploaded: <span class="font-semibold">567</span></p>
                <p class="text-gray-700 dark:text-gray-300 mt-2">Reviews Posted: <span class="font-semibold">789</span></p>
                <button class="mt-4 text-accent hover:text-green-700 font-medium transition dark:text-green-400 dark:hover:text-green-300">View Detailed Stats</button>
            </div>
        </div>
        <div class="mt-12 text-center">
            <button class="bg-primary text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-secondary transition transform hover:scale-105 shadow-lg dark:bg-gray-700 dark:hover:bg-yellow-400">Generate Report</button>
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

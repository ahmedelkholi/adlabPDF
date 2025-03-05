<script>
    // Toggle mobile menu with animation
    document.getElementById('navbar-toggle').addEventListener('click', function() {
        const menu = document.getElementById('navbar-menu');
        menu.classList.toggle('hidden'); // Toggle visibility
        menu.classList.toggle('translate-y-[-100%]'); // Slide down animation
    });
</script>
<footer class="bg-gray-900 text-gray-300 py-8">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="mb-6 md:mb-0">
                <h3 class="text-xl font-bold">About Us</h3>
                <p class="text-sm mt-2">We are a team of passionate professionals dedicated to delivering quality services and solutions.</p>
            </div>

            <div class="flex space-x-4">
                <a href="#" class="text-gray-300 hover:text-gray-400 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6">
                        <path d="M12 2.04c5.52 0 9.96 4.44 9.96 9.96 0 5.52-4.44 9.96-9.96 9.96-5.52 0-9.96-4.44-9.96-9.96 0-5.52 4.44-9.96 9.96-9.96zm0 2c-4.44 0-7.96 3.52-7.96 7.96 0 4.44 3.52 7.96 7.96 7.96 4.44 0 7.96-3.52 7.96-7.96 0-4.44-3.52-7.96-7.96-7.96zm-1.92 6.96v3.6h-1.44v-3.6h1.44zm.72 0h1.44v3.6h-1.44zm-1.68 4.8h3.12v1.44h-4.56v-1.44h1.44zm.24-1.68h-2.88v-3.6h1.44v3.6h1.44zm3.6 0h2.88v-3.6h-1.44v3.6h-1.44z"></path>
                    </svg>
                </a>
                <a href="#" class="text-gray-300 hover:text-gray-400 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6">
                        <path d="M23 12c0-6.07-4.93-11-11-11s-11 4.93-11 11 4.93 11 11 11 11-4.93 11-11zm-11 9c-4.96 0-9-4.04-9-9s4.04-9 9-9 9 4.04 9 9-4.04 9-9 9z"></path>
                    </svg>
                </a>
                <a href="#" class="text-gray-300 hover:text-gray-400 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6">
                        <path d="M12 2.04c5.52 0 9.96 4.44 9.96 9.96 0 5.52-4.44 9.96-9.96 9.96-5.52 0-9.96-4.44-9.96-9.96 0-5.52 4.44-9.96 9.96-9.96zm0 2c-4.44 0-7.96 3.52-7.96 7.96 0 4.44 3.52 7.96 7.96 7.96 4.44 0 7.96-3.52 7.96-7.96 0-4.44-3.52-7.96-7.96-7.96zm-1.92 6.96v3.6h-1.44v-3.6h1.44zm.72 0h1.44v3.6h-1.44zm-1.68 4.8h3.12v1.44h-4.56v-1.44h1.44zm.24-1.68h-2.88v-3.6h1.44v3.6h1.44zm3.6 0h2.88v-3.6h-1.44v3.6h-1.44z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <div class="mt-8 text-center">
            <p class="text-sm">&copy; 2025 Your Company. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>
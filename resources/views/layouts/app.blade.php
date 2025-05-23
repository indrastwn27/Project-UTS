<!DOCTYPE html>
<html lang="id" x-data="{ sidebarOpen: false }" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoCare - Peduli Lingkungan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="bg-gray-50 font-sans">

    <!-- Overlay (Mobile) -->
    <div x-show="sidebarOpen" @click="sidebarOpen = false"
         class="fixed inset-0 bg-black bg-opacity-40 z-40 md:hidden"></div>

    <!-- Sidebar (Mobile Only) -->
    <aside x-show="sidebarOpen"
           class="fixed top-0 left-0 w-64 h-full bg-white shadow-md z-50 transform transition-transform duration-300 md:hidden"
           x-transition:enter="translate-x-0" x-transition:leave="translate-x-full">
        <div class="p-4 border-b font-bold text-lg">🌿 PontiCare</div>
        <nav class="p-4 space-y-2">
            <a href="/" class="block px-4 py-2 rounded hover:bg-gray-100">Beranda</a>
            <a href="/report" class="block px-4 py-2 rounded hover:bg-gray-100">Lapor</a>
            <a href="/dashboard" class="block px-4 py-2 rounded hover:bg-gray-100">Dashboard</a>
            <a href="/impact" class="block px-4 py-2 rounded hover:bg-gray-100">Dampak</a>
        </nav>
    </aside>

    <!-- Navbar -->
    <nav class="bg-green-600 shadow-md">
        <div class="max-w-6xl mx-auto px-4 py-3 flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-white">🌱 PontiCare</a>
            <div class="hidden md:flex space-x-6">
                <a href="/" class="text-white hover:text-green-200">Beranda</a>
                <a href="/report" class="text-white hover:text-green-200">Lapor</a>
                <a href="/dashboard" class="text-white hover:text-green-200">Dashboard</a>
                <a href="/impact" class="text-white hover:text-green-200">Dampak</a>
            </div>
            <!-- Hamburger button -->
            <button @click="sidebarOpen = !sidebarOpen" class="md:hidden text-white focus:outline-none text-2xl">
                ☰
            </button>
        </div>
    </nav>

    <!-- Konten -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p>© 2025 Tugas UTS Mahasiswa Muhammadiyah Pontianak</p>
        </div>
    </footer>
    
    <!-- Leaflet -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    @stack('scripts')

</body>
</html>

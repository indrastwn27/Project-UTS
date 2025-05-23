<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoCare - Peduli Lingkungan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
</head>
<body class="bg-gray-50 font-sans">
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
            <button class="md:hidden text-white">☰</button>
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
    
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    @stack('scripts')
</body>
</html>
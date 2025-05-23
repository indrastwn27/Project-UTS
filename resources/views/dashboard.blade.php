@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Dashboard Laporan Lingkungan</h2>
    
    <div class="grid md:grid-cols-4 gap-6 mb-8">
        <!-- Card Statistik -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-gray-500">Total Laporan</h3>
            <p class="text-3xl font-bold text-green-600">1,240</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-gray-500">Dalam Proses</h3>
            <p class="text-3xl font-bold text-yellow-500">89</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-gray-500">Terselesaikan</h3>
            <p class="text-3xl font-bold text-blue-500">1,024</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-gray-500">Relawan Aktif</h3>
            <p class="text-3xl font-bold text-purple-500">3,850</p>
        </div>
    </div>

    <!-- Daftar Laporan -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="px-6 py-4 border-b">
            <h3 class="text-xl font-bold text-gray-800">Laporan Terbaru</h3>
        </div>
        <div class="divide-y">
            <!-- Item Laporan -->
            <div class="p-6 hover:bg-gray-50 transition">
                <div class="flex items-start">
                    <div class="flex-shrink-0 bg-green-100 p-3 rounded-lg">
                        <span class="text-green-600 text-xl">🗑️</span>
                    </div>
                    <div class="ml-4">
                        <h4 class="font-bold text-gray-800">Sampah Menumpuk di TPS 3R Menanjak</h4>
                        <p class="text-gray-600 text-sm">Jl. Parit H. Muksin II, Kubu Raya</p>
                        <div class="flex items-center mt-2">
                            <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">Dalam Proses</span>
                            <span class="text-gray-500 text-sm ml-auto">4 hari lalu</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Item Laporan 2 -->
            <div class="p-6 hover:bg-gray-50 transition">
                <div class="flex items-start">
                    <div class="flex-shrink-0 bg-blue-100 p-3 rounded-lg">
                        <span class="text-blue-600 text-xl">💧</span>
                    </div>
                    <div class="ml-4">
                        <h4 class="font-bold text-gray-800">Pencemaran Air di Kota Baru</h4>
                        <p class="text-gray-600 text-sm">Jl. Perintis, Pontianak</p>
                        <div class="flex items-center mt-2">
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Selesai</span>
                            <span class="text-gray-500 text-sm ml-auto">1 minggu lalu</span>
                        </div>
                    </div>
                </div>
            </div>
                        <!-- Item Laporan 3 -->
            <div class="p-6 hover:bg-gray-50 transition">
                <div class="flex items-start">
                    <div class="flex-shrink-0 bg-green-100 p-3 rounded-lg">
                        <span class="text-green-600 text-xl">💧</span>
                    </div>
                    <div class="ml-4">
                        <h4 class="font-bold text-gray-800">Pencemaran Air di Desa Kapur</h4>
                        <p class="text-gray-600 text-sm">Jl. Desa Kapur, Kubu Raya</p>
                        <div class="flex items-center mt-2">
                            <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">Dalam Proses</span>
                            <span class="text-gray-500 text-sm ml-auto">6 hari lalu</span>
                        </div>
                    </div>
                </div>
            </div>
                        <!-- Item Laporan 4-->
            <div class="p-6 hover:bg-gray-50 transition">
                <div class="flex items-start">
                    <div class="flex-shrink-0 bg-green-100 p-3 rounded-lg">
                        <span class="text-green-600 text-xl">🗑️</span>
                    </div>
                    <div class="ml-4">
                        <h4 class="font-bold text-gray-800">Sampah Menumpuk di Kawasan Hotel Kapuas Palace</h4>
                        <p class="text-gray-600 text-sm">Jl. Budi Karya, Pontianak</p>
                        <div class="flex items-center mt-2">
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Selesai</span>
                            <span class="text-gray-500 text-sm ml-auto">8 Minggu Lalu</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
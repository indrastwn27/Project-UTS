@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="bg-gradient-to-r from-green-600 to-emerald-800 py-20 px-4 text-white">
    <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Pelajari Dampak Lingkungan</h1>
        <p class="text-xl mb-8">Temukan bagaimana laporanmu berkontribusi pada perubahan nyata</p>
    </div>
</div>

<!-- Konten Edukasi -->
<div class="max-w-6xl mx-auto px-4 py-16">
    <!-- Section 1: Statistik Dampak -->
    <div class="mb-20">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Dampak Kolaborasi Kita</h2>
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <span class="text-green-600 text-2xl">📈</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Tren Perbaikan Lingkungan</h3>
                    </div>
                    <div class="h-64 bg-gray-100 rounded-lg flex items-center justify-center">
                         <img src="/images/grafik.jpg" alt="Logo Inovasi Sosial" class="h-60 w-60 object-contain">
                        <p class="text-gray-500">Visualisasi grafik peningkatan kualitas lingkungan</p>
                    </div>
                </div>
            </div>
            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="font-bold text-lg mb-3 text-gray-800">📊 72% Penurunan Sampah</h3>
                    <p class="text-gray-600">Wilayah yang aktif melapor mengalami penurunan timbunan sampah</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="font-bold text-lg mb-3 text-gray-800">🌿 120+ Lokasi Hijau</h3>
                    <p class="text-gray-600">Area bekas pembuangan sampah berubah menjadi ruang hijau</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 2: Studi Kasus -->
    <div class="mb-20">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Kisah Sukses</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Kasus 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="h-48 bg-green-100 flex items-center justify-center">
                    <img src="/images/sungai.jpg" alt="Logo Inovasi Sosial" class="h-60 w-60 object-contain">
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2 text-gray-800">Pembersihan Sungai Kapuas</h3>
                    <p class="text-gray-600 mb-4">18 ton sampah berhasil diangkat oleh relawan</p>
                    <a href="#" class="text-green-600 font-semibold hover:underline">Baca selengkapnya →</a>
                </div>
            </div>
            
            <!-- Kasus 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="h-48 bg-green-100 flex items-center justify-center">
                    <img src="/images/pabrik.jpg" alt="Logo Inovasi Sosial" class="h-60 w-60 object-contain">
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2 text-gray-800">Pengurangan Polusi Udara di Kota Pontianak</h3>
                    <p class="text-gray-600 mb-4">2 pabrik memperbaiki sistem pembuangannya</p>
                    <a href="#" class="text-green-600 font-semibold hover:underline">Baca selengkapnya →</a>
                </div>
            </div>
            
            <!-- Kasus 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="h-48 bg-green-100 flex items-center justify-center">
                    <img src="/images/daur.jpg" alt="Logo Inovasi Sosial" class="h-60 w-60 object-contain">
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2 text-gray-800">Program Daur Ulang</h3>
                    <p class="text-gray-600 mb-4">45% sampah terkelola melalui bank sampah</p>
                    <a href="#" class="text-green-600 font-semibold hover:underline">Baca selengkapnya →</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 3: Tips & Edukasi -->
    <div class="bg-green-50 rounded-xl p-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Bagaimana Anda Bisa Berkontribusi?</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h3 class="font-bold text-lg mb-3 text-gray-800 flex items-center">
                    <span class="bg-green-100 text-green-600 p-2 rounded-full mr-3">1</span>
                    Kurangi Penggunaan Plastik
                </h3>
                <p class="text-gray-600">Bawa tas belanja sendiri dan gunakan wadah reusable</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h3 class="font-bold text-lg mb-3 text-gray-800 flex items-center">
                    <span class="bg-green-100 text-green-600 p-2 rounded-full mr-3">2</span>
                    Pilah Sampah
                </h3>
                <p class="text-gray-600">Pisahkan organik, anorganik, dan B3 di rumah</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h3 class="font-bold text-lg mb-3 text-gray-800 flex items-center">
                    <span class="bg-green-100 text-green-600 p-2 rounded-full mr-3">3</span>
                    Laporkan Masalah
                </h3>
                <p class="text-gray-600">Gunakan aplikasi untuk melaporkan kerusakan lingkungan</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h3 class="font-bold text-lg mb-3 text-gray-800 flex items-center">
                    <span class="bg-green-100 text-green-600 p-2 rounded-full mr-3">4</span>
                    Jadi Relawan
                </h3>
                <p class="text-gray-600">Ikuti kegiatan bersih-bersih dan penanaman pohon</p>
            </div>
        </div>
    </div>
</div>
@endsection
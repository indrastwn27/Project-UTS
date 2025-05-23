@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="bg-gradient-to-r from-green-500 to-emerald-700 py-20 px-4 text-white">
    <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Lestarikan Lingkungan Bersama Kami</h1>
        <p class="text-xl mb-8">Laporkan masalah lingkungan di sekitarmu dan jadi bagian dari solusi</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="/report" class="bg-transparent border-2 border-white px-6 py-3 rounded-lg font-bold hover:bg-white hover:text-green-600 transition">Buat Laporan</a>
            <a href="/impact" class="bg-transparent border-2 border-white px-6 py-3 rounded-lg font-bold hover:bg-white hover:text-green-600 transition">Pelajari Dampak</a>
        </div>
    </div>
</div>

<!-- Statistik -->
<div class="max-w-6xl mx-auto px-4 py-16">
    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Dampak Kolaborasi Kita</h2>
    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition">
            <div class="text-green-500 text-5xl mb-4">♻️</div>
            <h3 class="text-2xl font-bold mb-2 text-gray-800">1.240+</h3>
            <p class="text-gray-600">Laporan Terselesaikan</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition">
            <div class="text-blue-500 text-5xl mb-4">🌳</div>
            <h3 class="text-2xl font-bold mb-2 text-gray-800">560+</h3>
            <p class="text-gray-600">Pohon Tertanam</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition">
            <div class="text-yellow-500 text-5xl mb-4">👥</div>
            <h3 class="text-2xl font-bold mb-2 text-gray-800">3.850+</h3>
            <p class="text-gray-600">Relawan Aktif</p>
        </div>
    </div>
</div>
@endsection
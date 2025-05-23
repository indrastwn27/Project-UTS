@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-10 py-12 ">
    <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Laporkan Masalah Lingkungan</h2>
    
    <div class="bg-white rounded-lg shadow-md p-8">
        <form class="space-y-6">
            <!-- Input Lokasi -->
            <div>
                <label class="block text-gray-700 mb-2 font-medium">Lokasi</label>
                <div id="map" class="h-64 mb-4 rounded-lg border-2 border-gray-300"></div>
                <input type="text" placeholder="Alamat lengkap" class="w-full px-4 py-2 border rounded-lg">
            </div>

            <!-- Kategori Masalah -->
            <div>
                <label class="block text-gray-700 mb-2 font-medium">Jenis Masalah</label>
                <select class="w-full px-4 py-2 border rounded-lg">
                    <option>Sampah Menumpuk</option>
                    <option>Pencemaran Air</option>
                    <option>Polusi Udara</option>
                    <option>Deforestasi</option>
                </select>
            </div>

            <!-- Upload Foto -->
            <div>
                <label class="block text-gray-700 mb-2 font-medium">Upload Bukti Foto</label>
                <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center">
                    <p class="text-gray-500">Seret foto kesini atau klik untuk upload</p>
                    <input type="file" class="hidden">
                </div>
            </div>

            <!-- Deskripsi -->
            <div>
                <label class="block text-gray-700 mb-2 font-medium">Deskripsi</label>
                <textarea rows="4" class="w-full px-4 py-2 border rounded-lg" placeholder="Jelaskan masalah secara detail..."></textarea>
            </div>

            <!-- Submit -->
            <button type="submit" class="w-full bg-green-600 text-white py-3 px-4 rounded-lg hover:bg-green-700 transition font-bold">
                Kirim Laporan
            </button>
        </form>
    </div>
</div>

@push('scripts')
<script>
    // Inisialisasi peta Leaflet
    const map = L.map('map').setView([-0.0263, 109.3425], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
    
    let marker;
    map.on('click', function(e) {
        if (marker) map.removeLayer(marker);
        marker = L.marker(e.latlng).addTo(map);
    });
</script>
@endpush
@endsection
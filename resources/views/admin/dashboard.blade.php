<x-layout_admin>
    <!-- MAIN AREA DASHBOARD ADMIN RENTALIN -->
    <main class="flex flex-col flex-grow p-6 ">

        <!-- Header page -->
        <h1 class="text-2xl font-semibold mb-4">Dashboard</h1>

        <!-- Cards ringkasan -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
            <!-- Card 1 -->
            <div class="bg-white shadow rounded-lg p-4">
                <h2 class="text-gray-600 text-sm">Total Produk</h2>
                <p class="text-2xl font-bold">120</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow rounded-lg p-4">
                <h2 class="text-gray-600 text-sm">Booking Aktif</h2>
                <p class="text-2xl font-bold">8</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white shadow rounded-lg p-4">
                <h2 class="text-gray-600 text-sm">Total Pelanggan</h2>
                <p class="text-2xl font-bold">345</p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white shadow rounded-lg p-4">
                <h2 class="text-gray-600 text-sm">Laporan Bulan Ini</h2>
                <p class="text-2xl font-bold">Rp 5,200,000</p>
            </div>
        </div>

        <!-- Section 2: Grafik & Tabel -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Grafik tren (placeholder) -->
            <div class="bg-white shadow rounded-lg p-4">
                <h2 class="text-lg font-semibold mb-4">Grafik Booking</h2>
                <div class="h-64 flex items-center justify-center text-gray-400">Chart Placeholder</div>
            </div>

            <!-- Tabel booking terbaru -->
            <div class="bg-white shadow rounded-lg p-4">
                <h2 class="text-lg font-semibold mb-4">Booking Terbaru</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-left text-sm">
                        <thead class="border-b font-medium text-gray-600">
                            <tr>
                                <th class="px-4 py-2">No</th>
                                <th class="px-4 py-2">Nama Pelanggan</th>
                                <th class="px-4 py-2">Produk</th>
                                <th class="px-4 py-2">Tanggal</th>
                                <th class="px-4 py-2">Status</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr class="border-b">
                                <td class="px-4 py-2">1</td>
                                <td class="px-4 py-2">Rudi</td>
                                <td class="px-4 py-2">Kamera FujiFilm XM5</td>
                                <td class="px-4 py-2">12-07-2025</td>
                                <td class="px-4 py-2 text-green-600">Disetujui</td>
                            </tr>
                            <!-- Tambah data lainnya di sini -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>

</x-layout_admin>

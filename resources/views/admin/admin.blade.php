<x-layout_admin>
    <main class="flex-1 p-8">

        <!-- Top bar kanan: ID dan Maemunah -->
        <div class="flex justify-end mb-4">
            <div class="flex items-center gap-2 border-l pl-4">
                <span class="text-gray-500 text-sm">ID</span>
                <span class="font-medium">Awan</span>
            </div>
        </div>

        <!-- Judul Pegawai -->
        <h1 class="text-xl font-semibold mb-4">Admin</h1>

        <!-- Bar Cari & Filter -->
        <div class="flex justify-between items-center mb-6">
            <!-- Kolom Cari -->
            <div>
                <input
                    type="text"
                    placeholder="Cari"
                    class="border border-gray-300 rounded px-3 py-1 w-64" />
            </div>

            <!-- Dropdown & Tombol Filter -->
            <div class="flex items-center gap-4">
                <select class="border border-gray-300 rounded px-3 py-1">
                    <option>Semua outlet</option>
                </select>
                <button class="bg-purple-700 text-white px-4 py-1 rounded">Terapkan filter</button>
            </div>
        </div>

        <!-- Tambah Pegawai -->
        <div class="mb-4 text-right">
            <button class="bg-purple-500 text-white px-4 py-2 rounded shadow" id="tambahPegawai">Tambah pegawai</button>
        </div>

        <!-- Tabel Pegawai -->
        <div class="border rounded overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 border-b">Nama</th>
                        <th class="px-4 py-2 border-b">Nomor HP</th>
                        <th class="px-4 py-2 border-b">Peran</th>
                        <th class="px-4 py-2 border-b"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2">Abdullah</td>
                        <td class="px-4 py-2">08765123456</td>
                        <td class="px-4 py-2">Owner</td>
                        <td class="px-4 py-2">
                            <button class="bg-purple-100 text-purple-700 px-3 py-1 rounded border border-purple-300">Edit</button>
                            <button class="bg-purple-100 text-purple-700 px-3 py-1 rounded border border-purple-300">Hapus</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2">Sabeni</td>
                        <td class="px-4 py-2">08765123457</td>
                        <td class="px-4 py-2">Manager</td>
                        <td class="px-4 py-2">
                            <button class="bg-purple-100 text-purple-700 px-3 py-1 rounded border border-purple-300">Edit</button>
                            <button class="bg-purple-100 text-purple-700 px-3 py-1 rounded border border-purple-300">Hapus</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2">Markonah</td>
                        <td class="px-4 py-2">08765123459</td>
                        <td class="px-4 py-2">Kasir</td>
                        <td class="px-4 py-2">
                            <button class="bg-purple-100 text-purple-700 px-3 py-1 rounded border border-purple-300">Edit</button>
                            <button class="bg-purple-100 text-purple-700 px-3 py-1 rounded border border-purple-300">Hapus</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2">Munaroh</td>
                        <td class="px-4 py-2">08765123455</td>
                        <td class="px-4 py-2">Kasir</td>
                        <td class="px-4 py-2">
                            <button class="bg-purple-100 text-purple-700 px-3 py-1 rounded border border-purple-300">Edit</button>
                            <button class="bg-purple-100 text-purple-700 px-3 py-1 rounded border border-purple-300">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-4 flex justify-center space-x-2">
            <button class="px-3 py-1 border rounded">&lt;</button>
            <button class="px-3 py-1 border rounded">1</button>
            <button class="px-3 py-1 border rounded">2</button>
            <button class="px-3 py-1 border rounded">3</button>
            <button class="px-3 py-1 border rounded">4</button>
            <button class="px-3 py-1 border rounded">5</button>
            <button class="px-3 py-1 border rounded">&gt;</button>
        </div>

    </main>
</x-layout_admin>
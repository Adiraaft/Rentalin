<x-layout_admin>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Laporan Booking</h1>

        <div class="mb-4 flex gap-4">
            <input type="date" id="start_date" class="border p-2 rounded" placeholder="Tanggal Mulai">
            <input type="date" id="end_date" class="border p-2 rounded" placeholder="Tanggal Akhir">
            <select id="status" class="border p-2 rounded">
                <option value="">Semua Status</option>
                <option value="pending">Pending</option>
                <option value="diproses">Diproses</option>
                <option value="selesai">Selesai</option>
                <option value="dibatalkan">Dibatalkan</option>
            </select>
            <button id="filterBtn" class="bg-blue-600 text-white px-4 py-2 rounded cursor-pointer">Filter</button>
            <a href="{{ route('laporan.export.excel', request()->query()) }}"
                class="bg-green-600 text-white px-4 py-2 rounded">Export Excel</a>

            <a href="{{ route('laporan.export.pdf', request()->query()) }}"
                class="bg-red-600 text-white px-4 py-2 rounded">Export PDF</a>
        </div>
        <div class="overflow-x-auto max-w-full rounded-lg shadow border">
            <table class="table-auto w-full bg-white text-sm" id="laporan-table">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">Nama</th>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">Produk</th>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">Tanggal</th>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">Status</th>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">Total</th>
                    </tr>
                </thead>
                <tbody id="laporanBody">
                    <tr>
                        <td colspan="5" class="text-center p-4 text-gray-500">Memuat data...</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.getElementById('filterBtn').addEventListener('click', loadLaporan);

        function loadLaporan() {
            const start = document.getElementById('start_date').value;
            const end = document.getElementById('end_date').value;
            const status = document.getElementById('status').value;

            fetch(`/admin/laporan/ajax?start_date=${start}&end_date=${end}&status=${status}`)
                .then(res => res.json())
                .then(data => {
                    const tbody = document.getElementById('laporanBody');
                    tbody.innerHTML = '';

                    if (data.length === 0) {
                        tbody.innerHTML =
                            '<tr><td colspan="5" class="text-center p-4 text-gray-500">Tidak ada data.</td></tr>';
                        return;
                    }

                    let totalHarga = 0;

                    data.forEach(item => {
                        const total = Number(item.total_price) || 0;
                        totalHarga += total;

                        const row =
                            `<tr>
                                <td class="px-4 py-2 border">${item.name}</td>
                                <td class="px-4 py-2 border">${item.product?.title || '-'}</td>
                                <td class="px-4 py-2 border">${item.start_date} s/d ${item.end_date}</td>
                                <td class="px-4 py-2 border">Rp ${total.toLocaleString()}</td>
                                <td class="px-4 py-2 border">${item.status}</td>
                            </tr>`;
                        tbody.innerHTML += row;
                    });

                    // Tambahkan baris total keseluruhan
                    const totalRow = `
                        <tr class="bg-gray-100 font-bold">
                            <td colspan="3" class="px-4 py-2 border text-right">Total Seluruh Transaksi:</td>
                            <td class="px-4 py-2 border text-left" colspan="2">Rp ${totalHarga.toLocaleString()}</td>
                        </tr>`;
                    tbody.innerHTML += totalRow;

                });
        }

        // Load awal
        loadLaporan();
    </script>

</x-layout_admin>

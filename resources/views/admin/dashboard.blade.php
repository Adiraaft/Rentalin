<x-layout_admin>

    <!-- MAIN AREA DASHBOARD ADMIN RENTALIN -->
    <main class="flex flex-col flex-grow p-6 ">

        <!-- Header page -->
        <h1 class="text-2xl font-semibold mb-4">Dashboard</h1>

        <!-- Cards ringkasan -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-gray-600 text-sm">Total Produk</h2>
                <p class="text-2xl font-bold">{{ $totalProduk }}</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-gray-600 text-sm">Booking Aktif</h2>
                <p class="text-2xl font-bold">{{ $bookingAktif }}</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-gray-600 text-sm">Total Pelanggan</h2>
                <p class="text-2xl font-bold">{{ $totalPelanggan }}</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-gray-600 text-sm">Laporan Bulan Ini</h2>
                <p class="text-2xl font-bold">Rp {{ number_format($laporanBulanIni, 0, ',', '.') }}</p>
            </div>
        </div>


        <!-- Section 2: Grafik & Tabel -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Grafik tren (placeholder) -->
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-lg font-semibold mb-4">Grafik Booking</h2>
                <div class="h-64">
                    <canvas id="bookingChart"></canvas>
                </div>
            </div>
            <!-- Tabel booking terbaru -->
            <div class="bg-white shadow-md rounded-lg p-4">
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
                            @foreach ($bookingTerbaru as $index => $booking)
                                <tr class="border-b">
                                    <td class="px-4 py-2">{{ $index + 1 }}</td>
                                    <td class="px-4 py-2">{{ $booking->name }}</td>
                                    <td class="px-4 py-2">{{ $booking->product->title ?? '-' }}</td>
                                    <td class="px-4 py-2">
                                        {{ \Carbon\Carbon::parse($booking->created_at)->format('d-m-Y') }}</td>
                                    <td class="px-4 py-2">
                                        <span class="px-2 py-1 text-xs rounded
                                            {{ $booking->status == 'pending' ? 'bg-yellow-100 text-yellow-700' : '' }}
                                            {{ $booking->status == 'berlangsung' ? 'bg-blue-100 text-blue-700' : '' }}
                                            {{ $booking->status == 'selesai' ? 'bg-green-100 text-green-700' : '' }}">
                                            {{ ucfirst($booking->status) }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach

                            @if ($bookingTerbaru->isEmpty())
                                <tr>
                                    <td colspan="5" class="px-4 py-3 text-center text-gray-500">Belum ada data
                                        booking</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </main>

</x-layout_admin>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        fetch('/admin/chart-data')
            .then(response => response.json())
            .then(data => {
                const ctx = document.getElementById('bookingChart').getContext('2d');

                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: data.labels,
                        datasets: [{
                            label: 'Jumlah Booking',
                            data: data.values,
                            fill: false,
                            borderColor: 'rgba(59, 130, 246, 1)',
                            backgroundColor: 'rgba(59, 130, 246, 0.5)',
                            tension: 0.3,
                            pointRadius: 5,
                            pointHoverRadius: 7
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    stepSize: 1
                                }
                            }
                        }
                    }
                });
            });
    });
</script>

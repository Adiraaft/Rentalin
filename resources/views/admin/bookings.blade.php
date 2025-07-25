<x-layout_admin>
    <div class="mx-6 my-10">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Data Booking</h1>
        <div class="overflow-x-auto max-w-full rounded-lg shadow border">
            <table class="table-auto w-full bg-white text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">Produk</th>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">Nama</th>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">Tanggal</th>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">Durasi</th>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">Total Harga</th>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">Status</th>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">Telepon</th>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                        @php
                            $start = \Carbon\Carbon::parse($booking->start_date);
                            $end = \Carbon\Carbon::parse($booking->end_date);
                            $days = $start->diffInDays($end) + 1; // minimal 1 hari
                            $total = $days * $booking->product->price;
                        @endphp
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="py-3 px-7 border-b">{{ $booking->product->title }}</td>
                            <td class="py-3 px-7 border-b">{{ $booking->name }}</td>
                            <td class="py-3 px-7 border-b text-sm text-gray-600 whitespace-nowrap">
                                {{ $booking->start_date }} - {{ $booking->end_date }}
                            </td>
                            <td class="py-3 px-7 border-b">{{ $days }} hari</td>
                            <td class="py-3 px-7 border-b">Rp {{ number_format($total, 0, ',', '.') }}</td>
                            <td class="py-3 px-7 border-b">
                                <form action="{{ route('bookings.updateStatus', $booking->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <select name="status" onchange="this.form.submit()"
                                        class="text-xs rounded px-2 py-1 border bg-white focus:outline-none 
                                        {{ $booking->status == 'pending'
                                            ? 'text-yellow-700 border-yellow-300 bg-yellow-100'
                                            : ($booking->status == 'diproses'
                                                ? 'text-blue-700 border-blue-300 bg-blue-100'
                                                : ($booking->status == 'berlangsung'
                                                    ? 'text-indigo-700 border-indigo-300 bg-indigo-100'
                                                    : ($booking->status == 'selesai'
                                                        ? 'text-green-700 border-green-300 bg-green-100'
                                                        : 'text-gray-700 border-gray-300 bg-gray-100'))) }}">
                                        <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>
                                            Pending</option>
                                        <option value="diproses" {{ $booking->status == 'diproses' ? 'selected' : '' }}>
                                            Diproses</option>
                                        <option value="berlangsung"
                                            {{ $booking->status == 'berlangsung' ? 'selected' : '' }}>Berlangsung
                                        </option>
                                        <option value="selesai" {{ $booking->status == 'selesai' ? 'selected' : '' }}>
                                            Selesai</option>
                                        <option value="dibatalkan"
                                            {{ $booking->status == 'dibatalkan' ? 'selected' : '' }}>Dibatalkan
                                        </option>
                                    </select>
                                </form>
                            </td>
                            <td class="py-3 px-7 border-b">{{ $booking->phone }}</td>
                            <td class="py-3 px-7 border-b">
                                <a href="mailto:{{ $booking->email }}"
                                    class="underline text-blue-600">{{ $booking->email }}</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout_admin>

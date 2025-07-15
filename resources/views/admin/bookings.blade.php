<x-layout_admin>
    <div class="mx-15 my-10">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Data Booking</h1>
        <div class="overflow-x-auto shadow">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-3 px-4 text-left font-semibold text-gray-700 border-b">Produk</th>
                        <th class="py-3 px-4 text-left font-semibold text-gray-700 border-b">Nama</th>
                        <th class="py-3 px-4 text-left font-semibold text-gray-700 border-b">Tanggal</th>
                        <th class="py-3 px-4 text-left font-semibold text-gray-700 border-b">Telepon</th>
                        <th class="py-3 px-4 text-left font-semibold text-gray-700 border-b">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="py-3 px-4 border-b text-gray-600">{{ $booking->product->title }}</td>
                            <td class="py-3 px-4 border-b text-gray-600">{{ $booking->name }}</td>
                            <td class="py-3 px-4 border-b text-gray-600">
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">{{ $booking->start_date }}</span>
                                <span class="mx-1">-</span>
                                <span
                                    class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">{{ $booking->end_date }}</span>
                            </td>
                            <td class="py-3 px-4 border-b text-gray-600">{{ $booking->phone }}</td>
                            <td class="py-3 px-4 border-b text-gray-600 hover:text-blue-500">
                                <a href="mailto:{{ $booking->email }}" class="underline">{{ $booking->email }}</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout_admin>

<table border="1" cellpadding="5" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Produk</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bookings as $item)
            @php
                $start = \Carbon\Carbon::parse($item->start_date);
                $end = \Carbon\Carbon::parse($item->end_date);
                $days = $start->diffInDays($end) + 1;
                $total = $days * ($item->product->price ?? 0);
            @endphp
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->product->title ?? '-' }}</td>
                <td>{{ $item->start_date }} s/d {{ $item->end_date }}</td>
                <td>{{ ucfirst($item->status) }}</td>
                <td>Rp {{ number_format($total, 0, ',', '.') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

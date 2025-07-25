<x-layout_admin>
    <div class="mx-6 my-10">
        <h1 class="text-2xl font-semibold mb-4">Kelola Produk</h1>

        @if (session('success'))
            <div class="bg-green-100 border text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        <div class="overflow-x-auto max-w-full rounded-lg shadow border">
            <table class="table-auto w-full bg-white text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">No</th>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">Nama Produk</th>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">Harga</th>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">Stok</th>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">Tanggal</th>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $index => $product)
                        <tr class="border-b">
                            <td class="py-3 px-7 border-b">{{ $index + 1 }}</td>
                            <td class="py-3 px-7 border-b">{{ $product->title }}</td>
                            <td class="py-3 px-7 border-b">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                            <td class="py-3 px-7 border-b">{{ $product->stock }}</td>
                            <td class="py-3 px-7 border-b">{{ $product->created_at }}</td>
                            <td class="py-3 px-7 border-b">
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('products.edit', $product->id) }}"
                                        class="inline-flex items-center gap-1 px-3 py-1.5 text-sm text-white bg-blue-600 rounded hover:bg-blue-700 transition">
                                        <!-- Icon edit (pakai heroicon misalnya) -->
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path d="M15.232 5.232l3.536 3.536M9 11l3 3 8-8-3-3-8 8zM4 20h7" />
                                        </svg>
                                        Edit
                                    </a>

                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button"
                                            class="btn-delete inline-flex items-center gap-1 px-3 py-1.5 text-sm text-white bg-red-600 rounded hover:bg-red-700 transition"
                                            data-id="{{ $product->id }}"
                                            data-url="{{ route('products.destroy', $product->id) }}">

                                            <!-- Icon trash -->
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M19 7L5 7M6 7V19a2 2 0 002 2h8a2 2 0 002-2V7M9 7V5a2 2 0 012-2h2a2 2 0 012 2v2" />
                                            </svg>
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout_admin>

<script>
    $(document).on('click', '.btn-delete', function() {
        let url = $(this).data('url');

        if (!confirm('Yakin ingin menghapus produk ini?')) return;

        $.ajax({
            url: url,
            method: 'POST', // tetap POST, kita spoof DELETE
            data: {
                _token: '{{ csrf_token() }}',
                _method: 'DELETE'
            },
            success: function(res) {
                alert("Produk berhasil dihapus!");
                location.reload();
            },
            error: function(xhr) {
                console.error(xhr);
                alert("Gagal menghapus produk:\n" + xhr.responseText);
            }
        });
    });
</script>

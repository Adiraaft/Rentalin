<x-layout_admin>
    <div class="mx-15 my-10">
        <h1 class="text-2xl font-semibold mb-4">Kelola Produk</h1>

        @if (session('success'))
            <div class="bg-green-100 border text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Nama Produk</th>
                    <th class="px-4 py-2">Harga</th>
                    <th class="px-4 py-2">Stok</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $index => $product)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $index + 1 }}</td>
                        <td class="px-4 py-2">{{ $product->title }}</td>
                        <td class="px-4 py-2">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                        <td class="px-4 py-2">{{ $product->stock }}</td>
                        <td class="px-4 py-2">
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
                                    <button type="submit" onclick="return confirm('Hapus produk ini?')"
                                        class="inline-flex items-center gap-1 px-3 py-1.5 text-sm text-white bg-red-600 rounded hover:bg-red-700 transition">
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
</x-layout_admin>

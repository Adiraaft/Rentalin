<x-layout_admin>
    <div class="mx-15 my-10">
        <h1 class="text-2xl font-semibold mb-4">Edit Produk</h1>

        <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data"
            class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block font-medium">Nama Produk</label>
                <input type="text" name="title" value="{{ old('title', $product->title) }}" required
                    class="w-full border p-2 rounded" />
            </div>

            <div>
                <label class="block font-medium">Harga per Hari</label>
                <input type="number" name="price" value="{{ old('price', $product->price) }}" required
                    class="w-full border p-2 rounded" />
            </div>

            <div>
                <label class="block font-medium">Stok</label>
                <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" required
                    class="w-full border p-2 rounded" />
            </div>

            <div>
                <label class="block font-medium">Deskripsi</label>
                <textarea name="description" rows="4" class="w-full border p-2 rounded">{{ old('description', $product->description) }}</textarea>
            </div>

            <div>
                <label class="block font-medium">Spesifikasi</label>
                <textarea name="specification" rows="4" class="w-full border p-2 rounded">{{ old('specification', $product->specification) }}</textarea>
            </div>

            <div>
                <label class="block font-medium">Foto Utama (kosongkan jika tidak diubah)</label><br>
                @if ($product->image_main)
                    <img src="{{ asset('storage/' . $product->image_main) }}" alt="" class="w-32 mb-2">
                @endif
                <input type="file" name="image_main" />
            </div>

            <div class="grid grid-cols-3 gap-4">
                @for ($i = 1; $i <= 3; $i++)
                    <div>
                        <label class="block font-medium">Foto Detail {{ $i }}</label><br>
                        @php
                            $field = 'image_detail' . $i;
                        @endphp
                        @if ($product->$field)
                            <img src="{{ asset('storage/' . $product->$field) }}" alt="" class="w-32 mb-2">
                        @endif
                        <input type="file" name="image_detail{{ $i }}" />
                    </div>
                @endfor
            </div>

            <button type="submit" class="bg-[#141414] text-white px-6 py-2 rounded">
                Simpan Perubahan
            </button>
        </form>
    </div>
</x-layout_admin>

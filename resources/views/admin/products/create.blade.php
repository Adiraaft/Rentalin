<x-layout_admin>
    <div class="mx-15 my-10">
        <h1 class="text-2xl font-semibold mb-4">Tambah Produk</h1>

        <form method="POST" action="{{ route('products.store')}}" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label class="block font-medium">Nama Produk</label>
                <input type="text" name="title" required class="w-full border p-2 rounded" />
            </div>

            <div>
                <label class="block font-medium">Harga per Hari</label>
                <input type="number" name="price" required class="w-full border p-2 rounded" />
            </div>

            <div>
                <label class="block font-medium">Stok</label>
                <input type="number" name="stock" required class="w-full border p-2 rounded" />
            </div>

            <div>
                <label class="block font-medium">Deskripsi</label>
                <textarea name="description" rows="4" class="w-full border p-2 rounded"></textarea>
            </div>

            <div>
                <label class="block font-medium">Spesifikasi</label>
                <textarea name="specification" rows="4" class="w-full border p-2 rounded"></textarea>
            </div>

            <div>
                <label class="block font-medium">Foto Utama</label>
                <input type="file" name="image_main" required />
            </div>

            <div class="grid grid-cols-3 gap-4">
                <div>
                    <label class="block font-medium">Foto Detail 1</label>
                    <input type="file" name="image_detail1" />
                </div>
                <div>
                    <label class="block font-medium">Foto Detail 2</label>
                    <input type="file" name="image_detail2" />
                </div>
                <div>
                    <label class="block font-medium">Foto Detail 3</label>
                    <input type="file" name="image_detail3" />
                </div>
            </div>

            <button type="submit" class="bg-[#141414] text-white px-6 py-2 rounded">Simpan Produk</button>
        </form>
    </div>

</x-layout_admin>

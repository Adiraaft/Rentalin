<x-layout_admin>
    <div class="mx-15 my-10">
        <h1 class="text-2xl font-semibold mb-4">Tambah Produk</h1>

        <form action="/" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label class="block font-medium">Nama Produk</label>
                <input type="text" name="nama_produk" required class="w-full border p-2 rounded" />
            </div>

            <div>
                <label class="block font-medium">Harga per Hari</label>
                <input type="number" name="harga_per_hari" required class="w-full border p-2 rounded" />
            </div>

            <div>
                <label class="block font-medium">Stok</label>
                <input type="number" name="harga_per_hari" required class="w-full border p-2 rounded" />
            </div>

            <div>
                <label class="block font-medium">Deskripsi</label>
                <textarea name="deskripsi" rows="4" class="w-full border p-2 rounded"></textarea>
            </div>

            <div>
                <label class="block font-medium">Spesifikasi</label>
                <textarea name="spesifikasi" rows="4" class="w-full border p-2 rounded"></textarea>
            </div>

            <div>
                <label class="block font-medium">Foto Utama</label>
                <input type="file" name="foto_utama" required />
            </div>

            <div class="grid grid-cols-3 gap-4">
                <div>
                    <label class="block font-medium">Foto Detail 1</label>
                    <input type="file" name="foto_1" />
                </div>
                <div>
                    <label class="block font-medium">Foto Detail 2</label>
                    <input type="file" name="foto_2" />
                </div>
                <div>
                    <label class="block font-medium">Foto Detail 3</label>
                    <input type="file" name="foto_3" />
                </div>
            </div>

            <button type="submit" class="bg-[#141414] text-white px-6 py-2 rounded">Simpan Produk</button>
        </form>
    </div>

</x-layout_admin>

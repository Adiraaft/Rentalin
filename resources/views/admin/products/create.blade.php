<x-layout_admin>
    <div class="mx-15 my-10">
        <h1 class="text-2xl font-semibold mb-4">Tambah Produk</h1>

        <form id="productForm" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label class="block font-medium">Nama Produk</label>
                <input type="text" name="title" class="w-full border p-2 rounded" />
            </div>

            <div>
                <label class="block font-medium">Harga per Hari</label>
                <input type="number" name="price" class="w-full border p-2 rounded" />
            </div>

            <div>
                <label class="block font-medium">Stok</label>
                <input type="number" name="stock" class="w-full border p-2 rounded" />
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
                <label class="block font-medium">Thumbnail Produk</label>
                <input type="file" name="image_thumbnail" />
            </div>

            <div>
                <label class="block font-medium">Foto Utama</label>
                <input type="file" name="image_main" />
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

            <button type="submit" id="saveButton" class="bg-[#141414] text-white px-6 py-2 rounded">
                Simpan Produk
            </button>
        </form>
    </div>

    <script>
        document.getElementById('productForm').addEventListener('submit', function (e) {
            let title = this.title.value.trim();
            let price = this.price.value.trim();
            let stock = this.stock.value.trim();
            let image_thumbnail = this.image_thumbnail.value.trim();
            let image_main = this.image_main.value.trim();

            if (title === '') {
                alert('Nama produk wajib diisi!');
                e.preventDefault();
                return false;
            }

            if (price === '' || isNaN(price) || parseInt(price) <= 0) {
                alert('Harga per Hari wajib diisi dengan angka lebih dari 0!');
                e.preventDefault();
                return false;
            }

            if (stock === '' || isNaN(stock) || parseInt(stock) < 0) {
                alert('Stok wajib diisi dengan angka 0 atau lebih!');
                e.preventDefault();
                return false;
            }

            if (image_thumbnail === '') {
                alert('Thumbnail produk wajib diunggah!');
                e.preventDefault();
                return false;
            }

            if (image_main === '') {
                alert('Foto utama wajib diunggah!');
                e.preventDefault();
                return false;
            }
        });
    </script>
</x-layout_admin>

<x-layout>
    <div class="m-15">
        <div class="grid grid-cols-12 gap-5">
            <!-- Kiri: Foto Besar + Foto Detail Kecil -->
            <div class="col-span-8 flex flex-col w-full">
                <!-- Foto besar -->
                <img src="{{ asset('storage/' . $product->image_main) }}" alt="{{ $product->title }}"
                    class="w-[873px] h-[402px] object-cover rounded-xl mx-auto">

                <!-- Foto detail kecil -->
                <div class="flex justify-between mt-5 w-full">
                    <img src="{{ asset('storage/' . $product->image_detail1) }}"
                        class="w-[250px] h-[145px] object-cover rounded-xl" alt="detail 1">
                    <img src="{{ asset('storage/' . $product->image_detail2) }}"
                        class="w-[250px] h-[145px] object-cover rounded-xl" alt="detail 2">
                    <img src="{{ asset('storage/' . $product->image_detail3) }}"
                        class="w-[250px] h-[145px] object-cover rounded-xl" alt="detail 3">
                </div>
                <div class="mt-32 font-['Poppins']">
                    <p class="text-2xl font-bold uppercase">{{ $product->title }}</p>
                    <p class="mt-4 whitespace-normal">{{ $product->description }}</p>
                </div>
            </div>

            <!-- Kanan: Form Booking -->
            <div class="col-span-4 bg-[#F6F5F1] p-10 rounded-2xl">
                <p class="text-xl font-semibold mb-4">Booking</p>
                <hr class="border-[#D7DEDD]">
                <form class="mt-4 flex flex-col gap-4" method="POST"
                    action="{{ route('bookings.store', $product->id) }}">
                    @csrf
                    <!-- Tanggal mulai & selesai -->
                    <div>
                        <label class="block text-sm mb-1">Tanggal Mulai</label>
                        <input type="date" name="start_date" id="start_date"
                            class="w-full bg-white rounded px-3 py-2" required />
                    </div>
                    <div>
                        <label class="block text-sm mb-1">Tanggal Selesai</label>
                        <input type="date" name="end_date" id="end_date" class="w-full bg-white rounded px-3 py-2"
                            required />
                    </div>

                    <!-- Nama -->
                    <div>
                        <label class="block text-sm mb-1">Nama Lengkap</label>
                        <input type="text" name="name" placeholder="Masukkan nama Anda"
                            class="w-full bg-white rounded px-3 py-2" required />
                    </div>

                    <!-- Nomor Telepon -->
                    <div>
                        <label class="block text-sm mb-1">Nomor Telepon</label>
                        <input type="tel" name="phone" placeholder="08xxxxxxxxxx"
                            class="w-full bg-white rounded px-3 py-2" required />
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm mb-1">Email</label>
                        <input type="email" name="email" placeholder="email@example.com"
                            class="w-full bg-white rounded px-3 py-2" required />
                    </div>

                    <!-- Alamat -->
                    <div>
                        <label class="block text-sm mb-1">Alamat Lengkap</label>
                        <textarea name="address" placeholder="Tulis alamat lengkap Anda" class="w-full bg-white rounded px-3 py-2" required></textarea>
                    </div>

                    <div>
                        <label class="block text-sm mb-1">Harga Barang</label>
                        <input type="text" id="price_display"
                            value="Rp {{ number_format($product->price, 0, ',', '.') }} / hari" readonly
                            class="w-full rounded px-3 py-2 bg-white" />
                        <input type="hidden" id="product_price" value="{{ $product->price }}">
                    </div>

                    <div>
                        <label class="block text-sm mb-1">Durasi (hari)</label>
                        <input type="text" id="duration" readonly class="w-full rounded px-3 py-2 bg-white" />
                    </div>

                    <div>
                        <label class="block text-sm mb-1">Total Harga</label>
                        <input type="text" id="total_price" readonly
                            class="w-full rounded px-3 py-2 bg-white font-bold" />
                    </div>

                    <button type="submit"
                        class="font-['DM_Sans'] w-full py-2 px-4 bg-[#141414] text-white rounded-sm mx-auto hover:bg-black hover:shadow-lg hover:scale-105 transition-all duration-300 ease-in-out">
                        Tambahkan ke Keranjang
                    </button>
                </form>
            </div>
        </div>
        <div class="mt-14 font-['Poppins']">
            <p class="text-2xl font-bold">SPESIFIKASI</p>
            <ul class="mt-4 list-disc list-inside">
                @foreach (explode("\n", $product->specification) as $spec)
                    <li>{{ $spec }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const startDate = document.getElementById('start_date');
            const endDate = document.getElementById('end_date');
            const duration = document.getElementById('duration');
            const totalPrice = document.getElementById('total_price');
            const productPrice = parseFloat(document.getElementById('product_price').value);

            function calculateTotal() {
                if (startDate.value && endDate.value) {
                    const start = new Date(startDate.value);
                    const end = new Date(endDate.value);
                    const diffTime = Math.abs(end - start);
                    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)) + 1;

                    duration.value = diffDays + ' hari';
                    totalPrice.value = 'Rp ' + (diffDays * productPrice).toLocaleString('id-ID');
                }
            }

            startDate.addEventListener('change', calculateTotal);
            endDate.addEventListener('change', calculateTotal);
        });
    </script>
</x-layout>

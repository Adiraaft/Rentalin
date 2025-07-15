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
            <div class="col-span-4 bg-[#F6F5F1] p-10 h-[760px] rounded-2xl">
                <p class="text-xl font-semibold mb-4">Booking</p>
                <hr class="border-[#D7DEDD]">
                <form class="mt-4 flex flex-col gap-4" action="#">
                    <!-- Tanggal mulai & selesai -->
                    <div>
                        <label class="block text-sm mb-1">Tanggal Mulai</label>
                        <input type="date" class="w-full bg-white rounded px-3 py-2" />
                    </div>
                    <div>
                        <label class="block text-sm mb-1">Tanggal Selesai</label>
                        <input type="date" class="w-full bg-white rounded px-3 py-2" />
                    </div>

                    <!-- Nama -->
                    <div>
                        <label class="block text-sm mb-1">Nama Lengkap</label>
                        <input type="text" placeholder="Masukkan nama Anda"
                            class="w-full bg-white rounded px-3 py-2" />
                    </div>

                    <!-- Nomor Telepon -->
                    <div>
                        <label class="block text-sm mb-1">Nomor Telepon</label>
                        <input type="tel" placeholder="08xxxxxxxxxx" class="w-full bg-white rounded px-3 py-2" />
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm mb-1">Email</label>
                        <input type="email" placeholder="email@example.com"
                            class="w-full bg-white rounded px-3 py-2" />
                    </div>

                    <!-- Alamat -->
                    <div>
                        <label class="block text-sm mb-1">Alamat Lengkap</label>
                        <textarea placeholder="Tulis alamat lengkap Anda" class="w-full bg-white rounded px-3 py-2"></textarea>
                    </div>

                    <div>
                        <label class="block text-sm mb-1">Harga Barang</label>
                        <input type="text" value="Rp {{ number_format($product->price, 0, ',', '.') }} / hari"
                            readonly class="w-full rounded px-3 py-2 bg-white" />
                    </div>

                    <button type="submit"
                        class="font-['DM_Sans'] w-full py-2 px-4 bg-[#141414] text-white rounded-sm mx-auto  hover:bg-black hover:shadow-lg hover:scale-105 transition-all duration-300 ease-in-out">Tambahkan
                        ke Keranjang</button>
                </form>
            </div>
        </div>
        <div class="mt-14 font-['Poppins']">
            <p class="text-2xl font-bold">SPESIFIKASI</p>
            <p class="mt-4 whitespace-normal">{{ $product->specification }}</p>
        </div>
    </div>
</x-layout>

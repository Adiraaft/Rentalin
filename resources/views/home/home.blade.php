<x-layout>
    <section style="background-image: url('{{ asset('image/hero.jpg') }}');"
        class="bg-cover bg-center min-h-[577px] flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-5xl font-bold mb-4 font-['Montserrat']">READY TO SHOOT. READY TO SHINE.</h1>
            <p class="font-['Poppins'] mt-2 text-xl">Rentalin hadir untuk mendukung setiap karya dan acara Anda.</p>
            <a href="product"
                class="mt-9 inline-block border border-white text-white text-base py-3.5 px-11 rounded-xl font-['DM_Sans'] hover:bg-white hover:text-black hover:shadow-lg transition-all duration-300 ease-in-out">
                Explore Gear
            </a>
        </div>
    </section>

    <section class="my-18 mx-15">
        <h1 class="text-center text-4xl font-['Montserrat'] font-medium">About Us</h1>
        <div class="mt-10 mx-25 flex items-center">
            <img src="{{ asset('image/about.jpg') }}" class="w-139 h-88 text-base" alt="kamera">
            <p class="font-['Poppins'] mx-8 tracking-widest">Rentalin adalah platform penyewaan peralatan multimedia
                seperti kamera, drone, lighting, tripod, dan perlengkapan produksi lainnya. Kami hadir untuk mempermudah
                proses sewa dengan sistem online yang cepat dan efisien.
                Dengan sistem yang ramah pengguna dan tim yang berpengalaman, Rentalin mendukung kreator konten, event
                organizer, hingga individu memenuhi kebutuhan produksi mereka — hanya dalam beberapa klik.
                Rentalin, sewa mudah untuk hasil luar biasa.
            </p>
        </div>
    </section>

    <section class="my-18">
        <div class="h-98 w-auto bg-[#141414] ">
            <h1 class="text-center text-4xl font-['Montserrat'] text-white font-medium pt-11">Our Premium Services</h1>
            <p class="text-white text-center mt-6 font-['Poppins'] mx-15">Rentalin adalah platform penyewaan peralatan
                terpercaya yang menyediakan berbagai perlengkapan multimedia dan layanan untuk memenuhi beragam
                kebutuhan produksi Anda.</p>
            <div class="flex gap-14 justify-center rounded-sm mt-10">
                <!-- Card 1 -->
                <div class="h-80 w-69 bg-white shadow-lg flex flex-col items-center justify-center gap-5">
                    <svg width="56" height="56" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16 16V6.2C16 5.0799 16 4.51984 15.782 4.09202C15.5903 3.71569 15.2843 3.40973 14.908 3.21799C14.4802 3 13.9201 3 12.8 3H5.2C4.0799 3 3.51984 3 3.09202 3.21799C2.71569 3.40973 2.40973 3.71569 2.21799 4.09202C2 4.51984 2 5.0799 2 6.2V12.8C2 13.9201 2 14.4802 2.21799 14.908C2.40973 15.2843 2.71569 15.5903 3.09202 15.782C3.51984 16 4.0799 16 5.2 16H16ZM16 16H20.4C20.9601 16 21.2401 16 21.454 15.891C21.6422 15.7951 21.7951 15.6422 21.891 15.454C22 15.2401 22 14.9601 22 14.4V11.6627C22 11.4182 22 11.2959 21.9724 11.1808C21.9479 11.0787 21.9075 10.9812 21.8526 10.8917C21.7908 10.7908 21.7043 10.7043 21.5314 10.5314L19.4686 8.46863C19.2957 8.29568 19.2092 8.2092 19.1083 8.14736C19.0188 8.09253 18.9213 8.05213 18.8192 8.02763C18.7041 8 18.5818 8 18.3373 8H16M9 18.5C9 19.8807 7.88071 21 6.5 21C5.11929 21 4 19.8807 4 18.5C4 17.1193 5.11929 16 6.5 16C7.88071 16 9 17.1193 9 18.5ZM20 18.5C20 19.8807 18.8807 21 17.5 21C16.1193 21 15 19.8807 15 18.5C15 17.1193 16.1193 16 17.5 16C18.8807 16 20 17.1193 20 18.5Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="font-['Poppins'] text-xl font-medium text-center">Pengambilan & Pengembalian Cepat</p>
                    <p class="text-center mx-4"> Nikmati proses sewa yang efisien dengan sistem check-in dan check-out
                        yang
                        simpel, tanpa antre lama.
                    </p>
                </div>
                <!-- Card 2 -->
                <div class="h-80 w-69 bg-white shadow-lg flex flex-col items-center justify-center gap-5">
                    <svg width="56" height="56" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.5 7.27783L12 12.0001M12 12.0001L3.49997 7.27783M12 12.0001L12 21.5001M21 16.0586V7.94153C21 7.59889 21 7.42757 20.9495 7.27477C20.9049 7.13959 20.8318 7.01551 20.7354 6.91082C20.6263 6.79248 20.4766 6.70928 20.177 6.54288L12.777 2.43177C12.4934 2.27421 12.3516 2.19543 12.2015 2.16454C12.0685 2.13721 11.9315 2.13721 11.7986 2.16454C11.6484 2.19543 11.5066 2.27421 11.223 2.43177L3.82297 6.54288C3.52345 6.70928 3.37369 6.79248 3.26463 6.91082C3.16816 7.01551 3.09515 7.13959 3.05048 7.27477C3 7.42757 3 7.59889 3 7.94153V16.0586C3 16.4013 3 16.5726 3.05048 16.7254C3.09515 16.8606 3.16816 16.9847 3.26463 17.0893C3.37369 17.2077 3.52345 17.2909 3.82297 17.4573L11.223 21.5684C11.5066 21.726 11.6484 21.8047 11.7986 21.8356C11.9315 21.863 12.0685 21.863 12.2015 21.8356C12.3516 21.8047 12.4934 21.726 12.777 21.5684L20.177 17.4573C20.4766 17.2909 20.6263 17.2077 20.7354 17.0893C20.8318 16.9847 20.9049 16.8606 20.9495 16.7254C21 16.5726 21 16.4013 21 16.0586Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M16.5 9.5L7.5 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <p class="font-['Poppins'] text-xl font-medium text-center">Peralatan Siap Pakai</p>
                    <p class="text-center mx-4">Semua alat kami telah dicek kebersihannya, dikalibrasi, dan siap
                        digunakan langsung untuk produksi Anda.</p>
                </div>
                <!-- Card 3 -->
                <div class="h-80 w-69 bg-white shadow-lg flex flex-col items-center justify-center gap-5">
                    <svg width="56" height="56" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13 3.5V6.2C13 7.88016 13 8.72024 13.327 9.36197C13.6146 9.92646 14.0735 10.3854 14.638 10.673C15.2798 11 16.1198 11 17.8 11H20.5M21 12.9882V16.2C21 17.8802 21 18.7202 20.673 19.362C20.3854 19.9265 19.9265 20.3854 19.362 20.673C18.7202 21 17.8802 21 16.2 21H7.8C6.11984 21 5.27976 21 4.63803 20.673C4.07354 20.3854 3.6146 19.9265 3.32698 19.362C3 18.7202 3 17.8802 3 16.2V7.8C3 6.11984 3 5.27976 3.32698 4.63803C3.6146 4.07354 4.07354 3.6146 4.63803 3.32698C5.27976 3 6.11984 3 7.8 3H11.0118C11.7455 3 12.1124 3 12.4577 3.08289C12.7638 3.15638 13.0564 3.27759 13.3249 3.44208C13.6276 3.6276 13.887 3.88703 14.4059 4.40589L19.5941 9.59411C20.113 10.113 20.3724 10.3724 20.5579 10.6751C20.7224 10.9436 20.8436 11.2362 20.9171 11.5423C21 11.8876 21 12.2545 21 12.9882Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="font-['Poppins'] text-xl font-medium text-center mx-2">Layanan Booking Fleksibel</p>
                    <p class="text-center mx-4">Pilih tanggal sewa sesuai kebutuhan Anda — dari harian hingga mingguan,
                        semua diatur dalam satu dashboard.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-50 mx-15">
        <h1 class="text-center text-4xl font-['Montserrat'] font-medium">Featured Equipment</h1>
        <div class="grid grid-cols-12 grid-rows-2 mt-10 gap-5">
            <!-- Card 1 -->
            <div
                class="col-span-3 bg-white shadow-md flex flex-col justify-between hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('image/fujifilm_xm5.png') }}" class="w-full h-[150px] object-contain overflow-hidden"
                    alt="kamera">
                <div class="mt-10 mx-6">
                    <p class="font-['Poppins'] font-medium text-xl">fujifilm XM5</p>
                    <p class="font-['Poppins'] font-medium mt-3">Rp250.000 / hari</p>
                    <a href="#"
                        class="font-['DM_Sans'] text-sm py-2 px-20 bg-[#141414] text-white rounded-sm mt-5 mb-8 inline-block hover:bg-black transition-colors duration-300">Rent
                        Now</a>
                </div>
            </div>
            <!-- Card 2 -->
            <div
                class="col-span-3 bg-white shadow-md flex flex-col justify-between hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('image/rode-wireless.png') }}"
                    class="w-full h-[150px] object-contain overflow-hidden" alt="kamera">
                <div class="mt-10 mx-6">
                    <p class="font-['Poppins'] font-medium text-xl">Rode Wireless GO II Microphone</p>
                    <p class="font-['Poppins'] font-medium mt-3">Rp120.000 / hari</p>
                    <a href="#"
                        class="font-['DM_Sans'] text-sm py-2 px-20 bg-[#141414] text-white rounded-sm mt-5 mb-8 inline-block">Rent
                        Now</a>
                </div>
            </div>
            <!-- Card 3 -->
            <div
                class="col-span-3 bg-white shadow-md flex flex-col justify-between hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('image/canon_eos.png') }}" class="w-full h-[150px] object-contain overflow-hidden"
                    alt="kamera">
                <div class="mt-10 mx-6">
                    <p class="font-['Poppins'] font-medium text-xl">Canon EOS R50 Kit</p>
                    <p class="font-['Poppins'] font-medium mt-3">Rp220.000 / hari</p>
                    <a href="#"
                        class="font-['DM_Sans'] text-sm py-2 px-20 bg-[#141414] text-white rounded-sm mt-5 mb-8 inline-block">Rent
                        Now</a>
                </div>
            </div>
            <!-- Card 4 -->
            <div
                class="col-span-3 bg-white shadow-md flex flex-col justify-between hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('image/godox_sl60w.png') }}" class="w-full h-[150px] object-contain overflow-hidden"
                    alt="kamera">
                <div class="mt-10 mx-6">
                    <p class="font-['Poppins'] font-medium text-xl">Godox SL60W LED Video Light</p>
                    <p class="font-['Poppins'] font-medium mt-3">Rp300.000 / hari</p>
                    <a href="#"
                        class="font-['DM_Sans'] text-sm py-2 px-20 bg-[#141414] text-white rounded-sm mt-5 mb-8 inline-block">Rent
                        Now</a>
                </div>
            </div>
            <!-- Card 5 -->
            <div
                class="col-span-3 bg-white shadow-md flex flex-col justify-between hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('image/zoom_h5.png') }}" class="w-full h-[150px] object-contain overflow-hidden"
                    alt="kamera">
                <div class="mt-10 mx-6">
                    <p class="font-['Poppins'] font-medium text-xl">Zoom H5 Audio Recorder</p>
                    <p class="font-['Poppins'] font-medium mt-3">Rp150.000 / hari</p>
                    <a href="#"
                        class="font-['DM_Sans'] text-sm py-2 px-20 bg-[#141414] text-white rounded-sm mt-5 mb-8 inline-block">Rent
                        Now</a>
                </div>
            </div>
            <!-- Card 6 -->
            <div
                class="col-span-3 bg-white shadow-md flex flex-col justify-between hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('image/manfrotto_290.png') }}"
                    class="w-full h-[150px] object-contain overflow-hidden" alt="kamera">
                <div class="mt-10 mx-6">
                    <p class="font-['Poppins'] font-medium text-xl">Tripod Manfrotto 290 Light</p>
                    <p class="font-['Poppins'] font-medium mt-3">Rp70.000 / hari </p>
                    <a href="#"
                        class="font-['DM_Sans'] text-sm py-2 px-20 bg-[#141414] text-white rounded-sm mt-5 mb-8 inline-block">Rent
                        Now</a>
                </div>
            </div>
            <!-- Card 7 -->
            <div
                class="col-span-3 bg-white shadow-md flex flex-col justify-between hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('image/sony_zve10.png') }}" class="w-full h-[150px] object-contain overflow-hidden"
                    alt="kamera">
                <div class="mt-10 mx-6">
                    <p class="font-['Poppins'] font-medium text-xl">Sony ZV-E10 Vlogging Kit</p>
                    <p class="font-['Poppins'] font-medium mt-3">Rp300.000 / hari</p>
                    <a href="#"
                        class="font-['DM_Sans'] text-sm py-2 px-20 bg-[#141414] text-white rounded-sm mt-5 mb-8 inline-block">Rent
                        Now</a>
                </div>
            </div>
            <!-- Card 8 -->
            <div
                class="col-span-3 bg-white shadow-md flex flex-col justify-between hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('image/ronin.png') }}" class="w-full h-[150px] object-contain overflow-hidden"
                    alt="kamera">
                <div class="mt-10 mx-6">
                    <p class="font-['Poppins'] font-medium text-xl">Stabilizer Gimbal DJI Ronin SC</p>
                    <p class="font-['Poppins'] font-medium mt-3"> Rp150.000 / hari</p>
                    <a href="#"
                        class="font-['DM_Sans'] text-sm py-2 px-20 bg-[#141414] text-white rounded-sm mt-5 mb-8 inline-block">Rent
                        Now</a>
                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <a href="product"
                class="font-['DM_Sans'] inline-block mt-10 py-3 px-13 bg-[#141414] text-white rounded-sm mx-auto  hover:bg-black hover:shadow-lg hover:scale-105 transition-all duration-300 ease-in-out">
                Explore All Product</a>
        </div>
    </section>

    <section id="faq" class="py-10 mt-10">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
                    Explore Common Questions
                </h2>
            </div>

            <div class="max-w-3xl mx-auto mt-8 space-y-4 md:mt-16">
                <!-- FAQ Item -->
                <div x-data="{ open: false }"
                    class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                    <button @click="open = !open" type="button"
                        class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="text-lg font-semibold text-black">Bagaimana cara menyewa peralatan di
                            Rentalin?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'rotate-180': open }"
                            class="w-6 h-6 text-gray-400 transition-transform duration-200" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition x-cloak class="px-4 pb-5 sm:px-6 sm:pb-6">
                        <p>
                            Cukup pilih produk yang ingin disewa, isi form booking, lalu lakukan pembayaran sesuai
                            petunjuk. Anda akan menerima konfirmasi dan dapat mengambil alat di lokasi kami.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div x-data="{ open: false }"
                    class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                    <button @click="open = !open" type="button"
                        class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="text-lg font-semibold text-black"> Apakah saya perlu membuat akun untuk
                            menyewa?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'rotate-180': open }"
                            class="w-6 h-6 text-gray-400 transition-transform duration-200" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition x-cloak class="px-4 pb-5 sm:px-6 sm:pb-6">
                        <p>Ya, Anda perlu mendaftar dan login agar dapat memantau status pemesanan, riwayat sewa, dan
                            mengelola data pemesanan Anda dengan mudah.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div x-data="{ open: false }"
                    class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                    <button @click="open = !open" type="button"
                        class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="text-lg font-semibold text-black">Berapa lama durasi minimal dan maksimal
                            penyewaan?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'rotate-180': open }"
                            class="w-6 h-6 text-gray-400 transition-transform duration-200" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition x-cloak class="px-4 pb-5 sm:px-6 sm:pb-6">
                        <p>Durasi penyewaan minimal adalah 1 hari. Untuk durasi lebih panjang, Anda bisa memilih tanggal
                            sesuai kebutuhan saat mengisi form booking.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div x-data="{ open: false }"
                    class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                    <button @click="open = !open" type="button"
                        class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="text-lg font-semibold text-black"> Apakah perlu mengunggah dokumen saat menyewa
                            peralatan?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'rotate-180': open }"
                            class="w-6 h-6 text-gray-400 transition-transform duration-200" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition x-cloak class="px-4 pb-5 sm:px-6 sm:pb-6">
                        <p>Ya, untuk keamanan bersama, Anda wajib mengunggah foto KTP/SIM saat melakukan pemesanan. Data
                            Anda akan kami jaga kerahasiaannya sesuai dengan kebijakan privasi.</p>
                    </div>
                </div>
            </div>

            <p class="text-center text-gray-600 textbase mt-9">
                Still have questions?
                <span class="cursor-pointer font-medium text-tertiary hover:text-tertiary hover:underline">
                    Contact our support
                </span>
            </p>
        </div>
    </section>

</x-layout>

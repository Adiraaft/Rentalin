@vite(['resources/css/app.css', 'resources/js/app.js'])
<footer class="bg-[#141414] h-100 text-white" id="footer">
    <div class="grid grid-cols-12 h-full">

        <!-- KIRI: Logo + Sosial -->
        <div class="col-span-6 flex flex-col justify-between px-15 py-10 h-full">
            <!-- Logo -->
            <div>
                <img src="{{ asset('image/logo-black.png') }}" alt="logo" class="h-auto w-30">
            </div>

            <!-- Icon Sosial -->
            <div class="flex gap-6">
                <!-- Facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path fill="#ffffff"
                        d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path fill="#ffffff"
                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                </svg>
            </div>
        </div>

        <!-- KANAN: Service & Info -->
        <div class="col-span-6 px-15 py-10 flex justify-end gap-24">
            <!-- Service -->
            <div>
                <p class="text-[#D3D8DE] pb-4 font-semibold">Service</p>
                <p>Produk</p>
                <p>Booking</p>
                <p>Bantuan</p>
            </div>

            <!-- Info -->
            <div class="flex flex-col justify-between h-full">
                <div>
                    <p class="text-[#D3D8DE] pb-4 font-semibold">Info</p>
                    <p>Tentang Kami</p>
                    <p>Syarat & Ketentuan</p>
                    <p>Kebijakan Privasi</p>
                </div>

                <div class="pt-6">
                    <p class="text-sm">+62 85738438212</p>
                    <p class="text-sm">rentalin@google.com</p>
                </div>

                <div class="pt-6 text-xs text-gray-400">
                    <p>© 2023 — Copyright</p>
                </div>
            </div>
        </div>

    </div>
</footer>

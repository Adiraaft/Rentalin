<x-layout>
    <div class="mx-15 flex justify-between items-center font-['Montserrat']">
        <!-- Heading -->
        <h1 class="text-2xl font-medium pt-11">
            Equipment
        </h1>
        <!-- Sort Filter -->
        <div x-data="productList()" class="flex items-center gap-2 pt-11">
            <label class="text-sm font-medium">Sort by:</label>
            <select x-model="sortBy" @change="sortProducts" class="px-3 py-1 text-sm border border-gray-300 rounded">
                <option value="recommended">Recommended</option>
                <option value="lowToHigh">Price: Low to High</option>
                <option value="highToLow">Price: High to Low</option>
                <option value="newest">Newest</option>
            </select>
        </div>
    </div>

    <div class="mx-15 my-10 grid grid-cols-12 grid-rows-2 mt-10 gap-5 font-['Montserrat']">
        <div class="col-span-3 row-span-2">
            <p class="text-xl font-medium">Category</p>
            <!-- Filter -->
            <div class="flex flex-col gap-2">
                <button class="text-xl font-bold mt-10 text-left">All</button>
                <button class="text-sm text-left">Action Cam / Drones</button>
                <button class="text-sm text-left">Camera Video / Camcorder</button>
                <button class="text-sm text-left">Camera Sony</button>
                <button class="text-sm text-left">Camera Canon</button>
                <button class="text-sm text-left">Camera Fujifilm / Nikon</button>
                <button class="text-sm text-left">Camera Package</button>
                <button class="text-sm text-left">Lenses Canon</button>
                <button class="text-sm text-left">Lighting Continuous</button>
                <button class="text-sm text-left">Audio / Mic Support</button>
                <button class="text-sm text-left">Stabilizer / Slider</button>
            </div>
        </div>
        <!-- Card 1 -->
        <div class="col-span-3 bg-white shadow-md flex flex-col justify-between">
            <img src="{{ asset('image/fujifilm_xm5.png') }}" class="w-full h-[150px] object-contain overflow-hidden"
                alt="kamera">
            <div class="mt-10 mx-6">
                <p class="font-['Poppins'] font-medium text-xl">fujifilm XM5</p>
                <p class="font-['Poppins'] font-medium mt-3">Rp250.000 / hari</p>
                <a href="detail_product"
                    class="font-['DM_Sans'] text-sm py-2 px-20 bg-[#141414] text-white rounded-sm mt-5 mb-8 inline-block">Rent
                    Now</a>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-span-3 bg-white shadow-md flex flex-col justify-between">
            <img src="{{ asset('image/rode-wireless.png') }}" class="w-full h-[150px] object-contain overflow-hidden"
                alt="kamera">
            <div class="mt-10 mx-6">
                <p class="font-['Poppins'] font-medium text-xl">Rode Wireless GO II Microphone</p>
                <p class="font-['Poppins'] font-medium mt-3">Rp120.000 / hari</p>
                <a href="#"
                    class="font-['DM_Sans'] text-sm py-2 px-20 bg-[#141414] text-white rounded-sm mt-5 mb-8 inline-block">Rent
                    Now</a>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-span-3 bg-white shadow-md flex flex-col justify-between">
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
        <div class="col-span-3 bg-white shadow-md flex flex-col justify-between">
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
        <div class="col-span-3 bg-white shadow-md flex flex-col justify-between">
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
        <div class="col-span-3 bg-white shadow-md flex flex-col justify-between">
            <img src="{{ asset('image/manfrotto_290.png') }}" class="w-full h-[150px] object-contain overflow-hidden"
                alt="kamera">
            <div class="mt-10 mx-6">
                <p class="font-['Poppins'] font-medium text-xl">Tripod Manfrotto 290 Light</p>
                <p class="font-['Poppins'] font-medium mt-3">Rp70.000 / hari </p>
                <a href="#"
                    class="font-['DM_Sans'] text-sm py-2 px-20 bg-[#141414] text-white rounded-sm mt-5 mb-8 inline-block">Rent
                    Now</a>
            </div>
        </div>
    </div>


</x-layout>

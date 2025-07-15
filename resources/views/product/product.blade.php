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
        @foreach ($products as $product)
            <div class="col-span-3 bg-white shadow-md flex flex-col items-center justify-between">
                <img src="{{ asset('storage/' . $product->image_thumbnail) }}" alt="{{ $product->title }}"
                    class="w-full h-[150px] object-contain" />
                <div class="mt-10 mx-6">
                    <p class="font-['Poppins'] font-medium text-xl">{{ $product->title }}</p>
                    <p class="font-['Poppins'] font-medium mt-3">
                        Rp{{ number_format($product->price, 0, ',', '.') }} / hari
                    </p>
                    <a href="{{ route('product.detail', $product->id) }}"
                        class="font-['DM_Sans'] text-sm py-2 px-20 bg-[#141414] text-white rounded-sm mt-5 mb-8 inline-block">
                        Rent Now
                    </a>
                </div>
            </div>
        @endforeach

    </div>


</x-layout>

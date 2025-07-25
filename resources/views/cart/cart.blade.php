<x-layout>
    <div class="container mx-auto mt-10 font-[Poppins]">
        <div class="sm:flex my-10">
            <div class="w-full sm:w-3/4 px-10 py-10">
                <div class="flex justify-between border-b pb-8">
                    <h1 class="font-semibold text-2xl">Shopping Cart</h1>
                    <h2 class="font-semibold text-2xl">{{ count($cartItems) }} Items</h2>
                </div>

                @forelse ($cartItems as $item)
                    <div class="md:flex items-strech py-8 md:py-10 lg:py-8 border-t border-gray-50">
                        <div class="md:w-4/12 2xl:w-1/4 w-full">
                            <img src="{{ asset('storage/' . $item->product->image_thumbnail) }}"
                                class="md:block hidden w-full h-full object-center object-cover"
                                alt="{{ $item->product->title }}">
                        </div>
                        <div class="md:pl-3 md:w-8/12 2xl:w-3/4 flex flex-col justify-center">
                            <p class="text-xs leading-3 text-gray-800 md:pt-0 pt-4">{{ $item->product->sku ?? 'SKU' }}
                            </p>
                            <div class="flex items-center justify-between w-full">
                                <p class="text-base font-black leading-none text-gray-800">{{ $item->product->title }}
                                </p>
                            </div>
                            <p class="text-xs leading-3 text-gray-600 pt-2">{{ $item->name }}</p>
                            <p class="text-xs leading-3 text-gray-600 py-2">{{ $item->phone }}</p>
                            <p class="w-96 text-xs leading-3 text-gray-600">{{ $item->address }}</p>
                            <p class="text-xs leading-3 text-gray-600 pt-2">
                                Total hari:
                                {{ \Carbon\Carbon::parse($item->start_date)->diffInDays(\Carbon\Carbon::parse($item->end_date)) + 1 }}
                            </p>
                            <div class="flex items-center justify-between pt-5">
                                <div class="flex items-center">
                                    <button @click="open = true"
                                        class="text-xs leading-3 underline text-gray-800 cursor-pointer">
                                        Edit
                                    </button>
                                    <form action="{{ route('cart.destroy', $item->id) }}" method="POST"
                                        onsubmit="return confirm('Yakin mau hapus item ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-xs leading-3 underline text-red-500 pl-5">
                                            Remove
                                        </button>
                                    </form>
                                </div>
                                <p class="text-base font-black leading-none text-gray-800">
                                    Rp {{ number_format($item->total_price, 0, ',', '.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 py-5">Keranjang kosong.</p>
                @endforelse

                <a href="/product" class="flex font-semibold text-indigo-600 text-sm mt-10">
                    <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
                        <path
                            d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
                    </svg>
                    Continue Shopping
                </a>
            </div>

            <div id="summary" class="w-full sm:w-1/4 md:w-1/2 px-8 py-10">
                <h1 class="font-semibold text-2xl border-b pb-8">Order Summary</h1>
                <div class="flex justify-between mt-10 mb-5">
                    <span class="font-semibold text-sm uppercase">Items {{ count($cartItems) }}</span>
                    <span class="font-semibold text-sm">
                        Rp {{ number_format($cartItems->sum('total_price'), 0, ',', '.') }}
                    </span>
                </div>
                <div class="py-10">
                    <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">
                        Promo Code
                    </label>
                    <input type="text" id="promo" placeholder="Enter your code" class="p-2 text-sm w-full" />
                </div>
                <button class="bg-red-500 hover:bg-red-600 px-5 py-2 text-sm text-white uppercase">
                    Apply
                </button>
                <div class="border-t mt-8">
                    <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                        <span>Total cost</span>
                        <span>Rp {{ number_format($cartItems->sum('total_price'), 0, ',', '.') }}</span>
                    </div>
                    <form id="payment-form">
                        @csrf
                        @if ($cartItems->count() > 0)
                            <button id="pay-button" type="button"
                                class="bg-[#141414] text-white rounded-sm mx-auto hover:bg-black hover:shadow-lg font-semibold py-3 text-sm uppercase w-full">
                                Checkout
                            </button>
                        @else
                            <button type="button" disabled
                                class="bg-gray-400 text-white cursor-not-allowed rounded-sm mx-auto font-semibold py-3 text-sm uppercase w-full">
                                Checkout
                            </button>
                        @endif
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
    </script>

    @if ($snapToken)
        <script>
            document.getElementById('pay-button').addEventListener('click', function(e) {
                e.preventDefault();

                snap.pay('{{ $snapToken }}', {
                    onSuccess: function(result) {
                        fetch("{{ route('cart.paymentCallback') }}", {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/json",
                                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                                },
                                body: JSON.stringify(result)
                            })
                            .then(response => response.json())
                            .then(data => {
                                alert('Pembayaran berhasil! Booking telah disimpan.');
                                window.location.href = '/cart/success';
                            });
                    },
                    onPending: function(result) {
                        alert('Menunggu pembayaran...');
                    },
                    onError: function(result) {
                        alert('Pembayaran gagal.');
                        console.error(result);
                    },
                    onClose: function() {
                        alert('Kamu menutup popup pembayaran.');
                    }
                });
            });
        </script>
    @endif

</x-layout>

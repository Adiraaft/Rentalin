@vite(['resources/css/app.css', 'resources/js/app.js'])

<header class="shadow h-20 font-['DM_Sans']">
    <div class="mx-15 mt-6 flex items-center justify-between">
        <img src="{{ asset('image/logo.png') }}" alt="logo">
        <div>
            <ul class="flex gap-8 font-bold relative">
                <li>
                    <a href="/"
                        class="text-gray-800 hover:text-black border-b-2 border-transparent hover:border-black transition-all duration-200">
                        Home
                    </a>
                </li>
                <li>
                    <a href="/product"
                        class="text-gray-800 hover:text-black border-b-2 border-transparent hover:border-black transition-all duration-200">
                        Produk
                    </a>
                </li>
                <li>
                    <a href="#faq"
                        class="text-gray-800 hover:text-black border-b-2 border-transparent hover:border-black transition-all duration-200">
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="#footer"
                        class="text-gray-800 hover:text-black border-b-2 border-transparent hover:border-black transition-all duration-200">
                        Kontak Kami
                    </a>
                </li>
            </ul>

        </div>

        <div class="flex gap-6">
            <a href="#"
                class="bg-[#141414] px-3.5 py-2.5 rounded-xl shadow hover:bg-[#1f1f1f] hover:scale-105 hover:ring-2 hover:ring-[#ffffff33] transition-all duration-200 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 576 512">
                    <path fill="#ffffff"
                        d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                </svg>
            </a>

            <!-- AUTH CHECK -->
            @auth
                <div class="relative inline-block text-left" x-data="{ open: false }">
                    <!-- Tombol nama + icon -->
                    <button @click="open = !open"
                        class="flex items-center gap-2 bg-[#141414] text-white px-6 py-3 rounded-xl shadow font-bold">
                        <!-- Icon profil -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="#ffffff" viewBox="0 0 24 24">
                            <path
                                d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z" />
                        </svg>
                        {{ Auth::user()->name }}
                        <!-- Icon caret -->
                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.23 8.29a.75.75 0 01.02-1.08z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Dropdown -->
                    <div x-show="open" @click.away="open = false"
                        class="absolute right-0 z-50 mt-2 w-40 bg-white rounded shadow py-2 ">
                        <a href="/settings" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Settings</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <!-- Kalau belum login -->
                <a href="{{ url('/sesi/register') }}"
                    class="bg-[#141414] text-white px-14 py-3 rounded-xl shadow font-bold">
                    Sign up
                </a>
            @endauth
        </div>
    </div>
</header>

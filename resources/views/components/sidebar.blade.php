<aside class="bg-[#141414] col-span-2 px-4 font-['Poppins']">
    <img src="{{ asset('image/logo-black.png') }}" class="w-30 justify-self-center" alt="logo">
    <nav>
        <ul class="space-y-4">
            <li>
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 hover:bg-[#3B3B3B] p-2 rounded text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-layout-dashboard-icon lucide-layout-dashboard">
                        <rect width="7" height="9" x="3" y="3" rx="1" />
                        <rect width="7" height="5" x="14" y="3" rx="1" />
                        <rect width="7" height="9" x="14" y="12" rx="1" />
                        <rect width="7" height="5" x="3" y="16" rx="1" />
                    </svg>
                    Dashboard
                </a>
            </li>
            <li x-data="{ open: false }" class="relative">
                <!-- Trigger link -->
                <button @click="open = !open"
                    class="flex items-center justify-between w-full gap-3 hover:bg-[#3B3B3B] p-2 rounded text-white">
                    <div class="flex items-center gap-3">
                        <!-- Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-box">
                            <path
                                d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z" />
                            <path d="m3.3 7 8.7 5 8.7-5" />
                            <path d="M12 22V12" />
                        </svg>
                        Product
                    </div>
                    <!-- Caret -->
                    <svg class="w-4 h-4 transform" :class="{ 'rotate-180': open }" fill="none" stroke="white"
                        viewBox="0 0 24 24">
                        <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </button>

                <!-- Submenu -->
                <ul x-show="open" @click.away="open = false" class="mt-2 ml-8 space-y-2">
                    <li>
                        <a href="{{ route('products.create') }}" class="block hover:bg-[#3B3B3B] p-2 rounded text-white">
                            Tambah Produk
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('products.index') }}" class="block hover:bg-[#3B3B3B] p-2 rounded text-white">
                            Kelola Produk
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ route('admin.bookings') }}" class="flex items-center gap-3 hover:bg-[#3B3B3B] p-2 rounded text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-clipboard-list-icon lucide-clipboard-list">
                        <rect width="8" height="4" x="8" y="2" rx="1" ry="1" />
                        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
                        <path d="M12 11h4" />
                        <path d="M12 16h4" />
                        <path d="M8 11h.01" />
                        <path d="M8 16h.01" />
                    </svg>
                    Booking
                </a>
            </li>
            <li>
                <a href="{{ route('admin.kelola-akun') }}" class="flex items-center gap-3 hover:bg-[#3B3B3B] p-2 rounded text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-users-round-icon lucide-users-round">
                        <path d="M18 21a8 8 0 0 0-16 0" />
                        <circle cx="10" cy="8" r="5" />
                        <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3" />
                    </svg>
                    Kelola Akun
                </a>
            </li>
            <li>
                <a href="{{ route('admin.notifikasi') }}" class="flex items-center gap-3 hover:bg-[#3B3B3B] p-2 rounded text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-bell-ring-icon lucide-bell-ring">
                        <path d="M10.268 21a2 2 0 0 0 3.464 0" />
                        <path d="M22 8c0-2.3-.8-4.3-2-6" />
                        <path
                            d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326" />
                        <path d="M4 2C2.8 3.7 2 5.7 2 8" />
                    </svg>
                    Notifikasi
                </a>
            </li>
            <li>
                <a href="{{ route('laporan.index') }}" class="flex items-center gap-3 hover:bg-[#3B3B3B] p-2 rounded text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="lucide lucide-file-chart-column-increasing-icon lucide-file-chart-column-increasing">
                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                        <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                        <path d="M8 18v-2" />
                        <path d="M12 18v-4" />
                        <path d="M16 18v-6" />
                    </svg>
                    Laporan
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center gap-3 hover:bg-[#3B3B3B] p-2 rounded text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-settings-icon lucide-settings">
                        <path
                            d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                        <circle cx="12" cy="12" r="3" />
                    </svg>
                    Pengaturan
                </a>
            </li>
        </ul>
    </nav>
</aside>

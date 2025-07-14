<header class="w-full bg-white px-6 py-3 flex items-center justify-between shadow-md">
    <!-- Tengah: Search bar -->
    <div class="flex-1 max-w-md mx-6">
        <div class="relative">
            <input type="text" placeholder="Search..."
                class="w-full border border-gray-300 rounded-full py-2 pl-4 pr-10 text-sm focus:outline-none focus:ring-2 focus:ring-primary-600" />
            <svg class="absolute right-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <circle cx="11" cy="11" r="8" />
                <line x1="21" y1="21" x2="16.65" y2="16.65" />
            </svg>
        </div>
    </div>

    <!-- Nama Akun Dropdown -->
    <div class="relative inline-block text-left" x-data="{ open: false }">
        <button @click="open = !open" class="flex items-center gap-4 px-4 py-2 rounded-xl font-medium">
            <!-- Icon profil -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="#141414" viewBox="0 0 24 24">
                <path
                    d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z" />
            </svg>
            {{ Auth::user()->name }}
            <!-- Caret -->
            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.23 8.29a.75.75 0 01.02-1.08z"
                    clip-rule="evenodd" />
            </svg>
        </button>

        <!-- Dropdown -->
        <div x-show="open" @click.away="open = false"
            class="absolute right-0 z-50 mt-2 w-40 bg-white rounded shadow py-2">
            <a href="/settings" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Settings</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                    Logout
                </button>
            </form>
        </div>
    </div>

</header>

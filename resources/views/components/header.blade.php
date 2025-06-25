@vite(['resources/css/app.css', 'resources/js/app.js'])
    
<header class="shadow h-20 font-['DM_Sans']">
    <div class="mx-15 mt-6 flex items-center justify-between">
        <img src="{{ asset('image/logo.png') }}" alt="logo">
        <div>
            <ul class="flex gap-6 font-bold relative">
                <li><a href="#">Home</a></li>
                <li><a href="#">Produk</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#footer">Kontak Kami</a></li>
            </ul>
        </div>

        <div class="flex gap-6">
            <a href="#" class="bg-[#141414] px-3.5 py-2.5 rounded-xl shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#ffffff" d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
            </a>
            <a href="login" class="bg-[#141414] text-white px-14 py-3 rounded-xl shadow font-[DM Sans] font-bold">
                Sign up
            </a>
        </div>
    </div>
</header>
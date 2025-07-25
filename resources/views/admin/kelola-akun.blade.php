<x-layout_admin>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Kelola Akun</h1>

        {{-- Filter --}}
        <form method="GET" action="{{ route('admin.kelola-akun') }}" class="mb-4">
            <select name="filter" onchange="this.form.submit()" class="border p-2 rounded">
                <option value="">Semua Role</option>
                <option value="admin" {{ $filter === 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="customer" {{ $filter === 'customer' ? 'selected' : '' }}>Customer</option>
            </select>
        </form>

        {{-- Button Tambah --}}
        <button onclick="document.getElementById('modal').classList.remove('hidden')"
            class="bg-blue-600 text-white px-4 py-2 mb-4 rounded">Tambah Akun Admin</button>

        {{-- Tabel --}}
        <div class="overflow-x-auto max-w-full rounded-lg shadow border">
            <table class="table-auto w-full bg-white text-sm">
                <thead class="bg-gray-100 text-left">
                    <tr>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">Nama</th>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">Email</th>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">Role</th>
                        <th class="py-3 px-7 text-left font-semibold text-gray-700 border-b">Dibuat</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-3 px-7 text-left font-semibold text-gray-700 border-b">{{ $user->name }}</td>
                            <td class="py-3 px-7 text-left font-semibold text-gray-700 border-b">{{ $user->email }}</td>
                            <td class="py-3 px-7 text-left font-semibold text-gray-700 border-b capitalize">{{ $user->role }}</td>
                            <td class="py-3 px-7 text-left font-semibold text-gray-700 border-b">{{ $user->created_at->format('d M Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center px-4 py-6 text-gray-500">Tidak ada akun ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Modal Tambah Akun Admin --}}
        <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
            <div class="bg-white p-6 rounded shadow-md w-full max-w-md">
                <h2 class="text-xl font-semibold mb-4">Tambah Akun Admin</h2>
                <form method="POST" action="{{ route('admin.kelola-akun.tambah') }}">
                    @csrf
                    <input type="text" name="name" placeholder="Nama" class="w-full mb-3 p-2 border rounded" required>
                    <input type="email" name="email" placeholder="Email" class="w-full mb-3 p-2 border rounded" required>
                    <input type="password" name="password" placeholder="Password" class="w-full mb-3 p-2 border rounded" required>
                    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" class="w-full mb-3 p-2 border rounded" required>
                    <div class="flex justify-end gap-2">
                        <button type="button" onclick="document.getElementById('modal').classList.add('hidden')" class="px-4 py-2 bg-gray-300 rounded">Batal</button>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout_admin>

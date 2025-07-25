<x-layout_admin>
    <div class="p-6">
        <h1 class="text-xl font-bold mb-4">Notifikasi</h1>
        <ul class="space-y-4">
            @forelse ($notifications as $notification)
                <li class="bg-white shadow p-4 rounded border {{ $notification->is_read ? 'opacity-50' : '' }}">
                    <strong>{{ $notification->title }}</strong>
                    <p class="text-gray-700">{{ $notification->message }}</p>
                    <small class="text-gray-500">{{ $notification->created_at->diffForHumans() }}</small>
                </li>
            @empty
                <p class="text-gray-500">Tidak ada notifikasi</p>
            @endforelse
        </ul>
    </div>
</x-layout_admin>

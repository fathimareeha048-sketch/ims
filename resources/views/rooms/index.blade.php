<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Rooms</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded shadow">
                <a href="{{ route('rooms.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Add Room</a>
                <h3 class="mt-4 font-bold">Total Rooms: {{ $rooms->count() }}</h3>
                <div class="mt-4">
                    @forelse($rooms as $room)
                        <div class="border p-2 mb-2">- {{ $room->name ?? $room->room_name ?? 'Room #'.$room->id }} | Capacity: {{ $room->capacity ?? '-' }}</div>
                    @empty
                        <p>No rooms found</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
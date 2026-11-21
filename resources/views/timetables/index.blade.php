<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Timetables</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded shadow">
                <a href="{{ route('timetables.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Add Timetable</a>
                <h3 class="mt-4 font-bold">Total Timetables: {{ $timetables->count() }}</h3>
                <div class="mt-4">
                    @forelse($timetables as $tt)
                        <div class="border p-2 mb-2">- ID: {{ $tt->id }} | Day: {{ $tt->day ?? '-' }} | Time: {{ $tt->time ?? $tt->start_time ?? '-' }}</div>
                    @empty
                        <p>No timetables found.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
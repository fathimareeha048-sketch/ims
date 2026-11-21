<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Batches</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded shadow">
                <a href="{{ route('batches.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Add Batch</a>
                <h3 class="mt-4 font-bold">Total Batches: {{ $batches->count() }}</h3>
                <div class="mt-4">
                    @forelse($batches as $batch)
                        <div class="border p-2 mb-2">- {{ $batch->name ?? 'Batch #'.$batch->id }} | {{ $batch->year ?? '' }}</div>
                    @empty
                        <p>No batches found. </p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Add New Batch</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded shadow">
                <form method="POST" action="{{ route('batches.store') }}">
                    @csrf
                    <label class="block">Batch Name</label>
                    <input type="text" name="name" class="border w-full p-2 mb-4" required placeholder="Ex: Batch 2024">

                    <label class="block">Year / Program</label>
                    <input type="text" name="year" class="border w-full p-2 mb-4" placeholder="Ex: 2024">

                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Save Batch</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
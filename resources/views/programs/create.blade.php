<x-app-layout>
<div class="p-6 max-w-xl mx-auto">
    <h2 class="text-xl font-bold mb-4">Add New Program</h2>
    <form method="POST" action="{{ route('programs.store') }}" class="bg-white p-6 shadow rounded">
        @csrf
        <label class="block mb-2">Name</label>
        <input type="text" name="name" class="w-full border p-2 mb-4 rounded" required>
        
        <label class="block mb-2">Code (Ex: CS-01)</label>
        <input type="text" name="code" class="w-full border p-2 mb-4 rounded" required>

        <label class="block mb-2">Description</label>
        <textarea name="description" class="w-full border p-2 mb-4 rounded"></textarea>

        <button class="bg-green-600 text-white px-4 py-2 rounded">Save Program</button>
    </form>
</div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add New Course
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded shadow">
                <form action="{{ route('courses.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label>Course Name</label>
                        <input type="text" name="name" class="w-full border rounded p-2" required>
                    </div>
                    <div class="mb-4">
                        <label>Description</label>
                        <textarea name="description" class="w-full border rounded p-2"></textarea>
                    </div>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
                    <a href="{{ route('courses.index') }}" class="ml-2">Back</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
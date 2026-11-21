<x-app-layout>
<div class="p-6">
    <div class="flex justify-between mb-4">
        <h2 class="text-xl font-bold">Programs</h2>
        <a href="{{ route('programs.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">+ Add Program</a>
    </div>

    <table class="w-full bg-white shadow rounded">
        <tr class="bg-gray-100"><th class="p-3">Name</th><th class="p-3">Code</th></tr>
        @foreach($programs as $p)
        <tr class="border-t"><td class="p-3">{{ $p->name }}</td><td class="p-3">{{ $p->code }}</td></tr>
        @endforeach
    </table>
</div>
</x-app-layout>
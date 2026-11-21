<x-app-layout>
    <div class="flex min-h-screen bg-gray-100">
        <div class="w-64 bg-[#0F2C56] text-white p-4 hidden md:block">
            <div class="flex items-center gap-2 mb-8"><div class="bg-white p-2 rounded text-xl">🎓</div><div><p class="font-bold">TT METRO</p><p class="text-xs">CAMPUS</p></div></div>
            <ul class="space-y-1 text-sm">
                <a href="{{ route('dashboard') }}"><li class="bg-blue-600 p-3 rounded flex gap-2 font-bold">🏠 Dashboard</li></a>
                <a href="{{ route('courses.index') }}"><li class="p-3 flex gap-2 hover:bg-blue-800 rounded">📚 Courses</li></a>
                <a href="{{ route('rooms.index') }}"><li class="p-3 flex gap-2 hover:bg-blue-800 rounded">🏫 Rooms</li></a>
                <a href="{{ route('batches.index') }}"><li class="p-3 flex gap-2 hover:bg-blue-800 rounded">👥 Batches</li></a>
                <a href="{{ route('teachers.index') }}"><li class="p-3 flex gap-2 hover:bg-blue-800 rounded">👨‍🏫 Teachers</li></a>
                <a href="{{ route('timetables.index') }}"><li class="p-3 flex gap-2 hover:bg-blue-800 rounded">🗓️ Timetable</li></a>
                <a href="{{ route('settings.index') }}"><li class="p-3 flex gap-2 hover:bg-blue-800 rounded">⚙️ Settings</li></a>
            </ul>
        </div>

        <div class="flex-1 p-6">
            <div class="flex justify-between items-center mb-6"><h1 class="text-2xl font-bold text-[#0F2C56]">Dashboard</h1><span class="bg-white px-4 py-2 rounded-full shadow text-sm">Admin</span></div>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4 mb-6">
                <a href="{{ route('courses.index') }}"><div class="bg-blue-50 p-5 rounded-xl shadow hover:shadow-lg hover:scale-105 transition flex justify-between items-center"><div><p class="text-gray-500 text-sm">Courses</p><h2 class="text-2xl font-bold">{{ \App\Models\Course::count() ?? 24 }}</h2><span class="text-xs text-blue-600">View all →</span></div><div class="bg-blue-100 p-3 rounded-full text-2xl">📚</div></div></a>
                <a href="{{ route('rooms.index') }}"><div class="bg-green-50 p-5 rounded-xl shadow hover:shadow-lg hover:scale-105 transition flex justify-between items-center"><div><p class="text-gray-500 text-sm">Rooms</p><h2 class="text-2xl font-bold">{{ \App\Models\Room::count() ?? 12 }}</h2><span class="text-xs text-green-600">View all →</span></div><div class="bg-green-100 p-3 rounded-full text-2xl">🏫</div></div></a>
                <a href="{{ route('batches.index') }}"><div class="bg-purple-50 p-5 rounded-xl shadow hover:shadow-lg hover:scale-105 transition flex justify-between items-center"><div><p class="text-gray-500 text-sm">Batches</p><h2 class="text-2xl font-bold">18</h2><span class="text-xs text-purple-600">View all →</span></div><div class="bg-purple-100 p-3 rounded-full text-2xl">👥</div></div></a>
                <a href="{{ route('teachers.index') }}"><div class="bg-orange-50 p-5 rounded-xl shadow hover:shadow-lg hover:scale-105 transition flex justify-between items-center"><div><p class="text-gray-500 text-sm">Teachers</p><h2 class="text-2xl font-bold">35</h2><span class="text-xs text-orange-600">View all →</span></div><div class="bg-orange-100 p-3 rounded-full text-2xl">👨‍🏫</div></div></a>
                <a href="{{ route('timetables.index') }}"><div class="bg-pink-50 p-5 rounded-xl shadow hover:shadow-lg hover:scale-105 transition flex justify-between items-center"><div><p class="text-gray-500 text-sm">Timetable</p><h2 class="text-2xl font-bold">6</h2><span class="text-xs text-pink-600">View all →</span></div><div class="bg-pink-100 p-3 rounded-full text-2xl">🗓️</div></div></a>
            </div>
        </div>
    </div>
</x-app-layout>
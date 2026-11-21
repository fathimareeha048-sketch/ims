<x-app-layout>
    <div class="flex min-h-screen bg-gray-100">
        <div class="w-64 bg-[#0F2C56] text-white p-4 hidden md:block">
            <ul class="space-y-1 text-sm">
                <a href="{{ route('dashboard') }}"><li class="p-3 flex gap-2 hover:bg-blue-800 rounded">🏠 Dashboard</li></a>
                <a href="{{ route('settings.index') }}"><li class="bg-blue-600 p-3 rounded flex gap-2 font-bold">⚙️ Settings</li></a>
            </ul>
        </div>
        <div class="flex-1 p-6">
            <h1 class="text-2xl font-bold mb-6">Settings</h1>
            <div class="bg-white p-6 rounded-xl shadow grid md:grid-cols-2 gap-6">
                <div class="border p-4 rounded-lg"><h3 class="font-bold">Profile Settings</h3><p class="text-sm text-gray-500">Admin name, email maathalam</p><button class="mt-3 bg-blue-600 text-white px-4 py-2 rounded">Edit Profile</button></div>
                <div class="border p-4 rounded-lg"><h3 class="font-bold">System Settings</h3><p class="text-sm text-gray-500">Institute name, logo</p><button class="mt-3 bg-green-600 text-white px-4 py-2 rounded">System Config</button></div>
                <div class="border p-4 rounded-lg"><h3 class="font-bold">Password</h3><p class="text-sm text-gray-500">Password maathalam</p><button class="mt-3 bg-orange-600 text-white px-4 py-2 rounded">Change Password</button></div>
                <div class="border p-4 rounded-lg"><h3 class="font-bold">Backup</h3><p class="text-sm text-gray-500">Database backup edukkalam</p><button class="mt-3 bg-purple-600 text-white px-4 py-2 rounded">Backup Now</button></div>
            </div>
        </div>
    </div>
</x-app-layout>
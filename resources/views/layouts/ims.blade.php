<!DOCTYPE html>
<html>
<head>
    <title>Institute Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="bg-white shadow flex items-center h-16 px-4">
        <img src="{{ asset('images/logo.png') }}" class="h-10 w-10 rounded-full mr-3">
        <span class="font-bold text-xl text-[#0F2C56]">Institute Management System</span>
        <div class="ml-auto">Admin</div>
    </div>

    <div class="flex">
        <div class="w-64 bg-[#0F2C56] min-h-screen text-white p-4">
            <div class="mb-8 font-bold">TT METRO CAMPUS</div>
            <nav class="space-y-2">
                <a href="/dashboard" class="block p-3 bg-blue-600 rounded">Dashboard</a>
                <a href="/courses" class="block p-3 hover:bg-blue-800 rounded">Courses</a>
                <a href="/rooms" class="block p-3 hover:bg-blue-800 rounded">Rooms</a>
                <a href="/batches" class="block p-3 hover:bg-blue-800 rounded">Batches</a>
                <a href="/teachers" class="block p-3 hover:bg-blue-800 rounded">Teachers</a>
                <a href="/timetable" class="block p-3 hover:bg-blue-800 rounded">Timetable</a>
            </nav>
        </div>

        <div class="flex-1 p-6">
            @yield('content')
        </div>
    </div>
</body>
</html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Add New Timetable</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded shadow">
                <form method="POST" action="{{ route('timetables.store') }}">
                    @csrf
                    <label class="block">Day</label>
                    <select name="day" class="border w-full p-2 mb-4">
                        <option>Monday</option>
                        <option>Tuesday</option>
                        <option>Wednesday</option>
                        <option>Thursday</option>
                        <option>Friday</option>
                    </select>

                    <label class="block">Start Time</label>
                    <input type="time" name="start_time" class="border w-full p-2 mb-4" required>

                    <label class="block">End Time</label>
                    <input type="time" name="end_time" class="border w-full p-2 mb-4" required>

                    <label class="block">Batch ID (optional)</label>
                    <input type="number" name="batch_id" class="border w-full p-2 mb-4" placeholder="1">

                    <label class="block">Course ID (optional)</label>
                    <input type="number" name="course_id" class="border w-full p-2 mb-4" placeholder="1">

                    <label class="block">Room ID (optional)</label>
                    <input type="number" name="room_id" class="border w-full p-2 mb-4" placeholder="1">

                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Save Timetable</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
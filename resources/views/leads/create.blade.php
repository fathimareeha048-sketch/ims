<x-app-layout>
    <x-slot name="header">
        <h2>Add New Lead</h2>
    </x-slot>

    <div style="padding: 20px;">
        <form action="{{ route('leads.store') }}" method="POST">
            @csrf
            <label>Name:</label><br>
            <input type="text" name="name" required style="padding:8px; width:300px;"><br><br>

            <label>Phone:</label><br>
            <input type="text" name="phone" required style="padding:8px; width:300px;"><br><br>

            <label>Email:</label><br>
            <input type="email" name="email" style="padding:8px; width:300px;"><br><br>

            <label>Course Interest:</label><br>
            <input type="text" name="course_interest" style="padding:8px; width:300px;"><br><br>

            <button type="submit" style="background: green; color: white; padding: 10px 20px;">Save Lead</button>
            <a href="{{ route('leads.index') }}">Back</a>
        </form>
    </div>
</x-app-layout>
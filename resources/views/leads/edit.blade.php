<x-app-layout>
    <x-slot name="header">
        <h2>Edit Lead</h2>
    </x-slot>

    <div style="padding: 20px;">
        <form action="{{ route('leads.update', $lead->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label>Name:</label><br>
            <input type="text" name="name" value="{{ $lead->name }}" required style="padding:8px; width:300px;"><br><br>
            <label>Phone:</label><br>
            <input type="text" name="phone" value="{{ $lead->phone }}" required style="padding:8px; width:300px;"><br><br>
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ $lead->email }}" style="padding:8px; width:300px;"><br><br>
            <button type="submit" style="background: orange; color: white; padding: 10px 20px;">Update</button>
            <a href="{{ route('leads.index') }}">Back</a>
        </form>
    </div>
</x-app-layout>
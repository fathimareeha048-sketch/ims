<x-app-layout>
    <x-slot name="header">
        <h2>Leads List</h2>
    </x-slot>

    <div style="padding: 20px;">
        @if(session('success'))
            <div style="background: #d4edda; padding: 10px; margin: 10px 0;">{{ session('success') }}</div>
        @endif

        <a href="{{ route('leads.create') }}" style="background: blue; color: white; padding: 8px 15px; text-decoration: none;">+ Add Lead</a>
        <br><br>

        <table border="1" cellpadding="10" cellspacing="0" width="100%">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            @forelse($leads as $lead)
            <tr>
                <td>{{ $lead->id }}</td>
                <td>{{ $lead->name }}</td>
                <td>{{ $lead->phone }}</td>
                <td>{{ $lead->email }}</td>
                <td>
                    <a href="{{ route('leads.edit', $lead->id) }}">Edit</a>
                    <form action="{{ route('leads.destroy', $lead->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="5">No Leads Found</td></tr>
            @endforelse
        </table>
        <br>
        {{ $leads->links() }}
    </div>
</x-app-layout>
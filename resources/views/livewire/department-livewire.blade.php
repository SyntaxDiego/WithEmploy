<div>
    <input class="search" type="text" wire:model=searchDepartment placeholder="Search for name">
    <br>
    <table>
        <thead>
            <tr class="thead">
                <th>Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departments as $department)
                <tr class="tbody">
                    <td class="title">{{ $department->name }}</td>
                    <td>
                        <a href="{{ route('department.show', $department) }}">Show</a>
                        <a href="{{ route('department.edit', $department) }}">Edit</a>
                        <form action="{{ route('department.destroy', $department->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this department?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div>
    <input class="search" type="text" wire:model=searchCountry placeholder="Search for name">
    <br>
    <table>
        <thead>
            <tr class="thead">
                <th>Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($countries as $country)
                <tr class="tbody">
                    <td class="title">{{ $country->name }}</td>
                    <td>
                        <a href="{{ route('country.show', $country) }}">Show</a>
                        <a href="{{ route('country.edit', $country) }}">Edit</a>
                        <form action="{{ route('country.destroy', $country->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this country?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

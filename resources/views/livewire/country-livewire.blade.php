<div>
    <input type="text" wire:model=searchCountry placeholder="Search for name">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($countries as $country)
                <tr>
                    <td>{{$country->name}}</td>
                    <td><a href="{{route('country.show', $country)}}">Show</a></td>
                    <td><a href="{{route('country.edit', $country)}}">Edit</a></td>
                    <td>
                        <form action="{{route('country.destroy', $country->id)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this country?')">
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

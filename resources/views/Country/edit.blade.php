@extends('Layout.app')
@section('main')
    <h1>Edit of {{ $country->name }}</h1>
    <form action="{{ route('country.update', $country->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label> Code </label>
        <input type="text" name="code" value="{{ $country->code }}" required autocomplete="off">
        @error('code')
            <div>{{ $message }}</div>
        @enderror
        <label> Name </label>
        <input type="text" name="name" value="{{ $country->name }}" required autocomplete="off">
        @error('name')
            <div>{{ $message }}</div>
        @enderror
        <label> Continent </label>
        <select name="continent">
            <option value="AFRICA" {{ $country->continent == 'AFRICA' ? 'selected' : '' }}>Africa</option>
            <option value="AMERICA" {{ $country->continent == 'AMERICA' ? 'selected' : '' }}>America</option>
            <option value="ANTARCTICA" {{ $country->continent == 'ANTARCTICA' ? 'selected' : '' }}>Antarctica</option>
            <option value="ASIA" {{ $country->continent == 'ASIA' ? 'selected' : '' }}>Asia</option>
            <option value="EUROPE" {{ $country->continent == 'EUROPE' ? 'selected' : '' }}>Europe</option>
            <option value="OCEANIA" {{ $country->continent == 'OCEANIA' ? 'selected' : '' }}>Oceania</option>
        </select>
        <button type="submit">update</button>
    </form>
@endsection
@section('footer')
    <a href="{{ route('country.index') }}">Back</a>
@endsection

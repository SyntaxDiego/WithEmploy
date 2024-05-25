@extends('Layout.app')
@section('main')
    <h1>Create a country</h1>
    <form action="{{ route('country.store') }}" method="POST">
        @csrf
        <label> Code </label>
        <input type="text" name="code" required autocomplete="off">
        @error('code')
            <div>{{ $message }}</div>
        @enderror
        <label> Name </label>
        <input type="text" name="name" required autocomplete="off">
        @error('name')
            <div>{{ $message }}</div>
        @enderror
        <label> Continent </label>
        <select name="continent">
            <option value="AFRICA">Africa</option>
            <option value="AMERICA">America</option>
            <option value="ANTARCTICA">Antarctica</option>
            <option value="ASIA">Asia</option>
            <option value="EUROPE">Europe</option>
            <option value="OCEANIA">Oceania</option>
        </select>
        <button type="submit">create</button>
    </form>
@endsection
@section('footer')
    <a href="{{ route('country.index') }}">Back</a> 
@endsection

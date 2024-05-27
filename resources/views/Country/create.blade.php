<link rel="stylesheet" href="{{ asset('css/create.css') }}">
@extends('Layout.app')
@section('main')
    <h1>Create a country</h1>
    <form action="{{ route('country.store') }}" method="POST">
        @csrf
        <label> <strong>code</strong> </label>
        <input type="text" name="code" required autocomplete="off">
        @error('code')
            <div>{{ $message }}</div>
        @enderror
        <label> <strong>name</strong> </label>
        <input type="text" name="name" required autocomplete="off">
        @error('name')
            <div>{{ $message }}</div>
        @enderror
        <label> <strong>continent</strong> </label>
        <select name="continent">
            <option value="AFRICA">Africa</option>
            <option value="AMERICA">America</option>
            <option value="ANTARCTICA">Antarctica</option>
            <option value="ASIA">Asia</option>
            <option value="EUROPE">Europe</option>
            <option value="OCEANIA">Oceania</option>
        </select>

        <button class="create" type="submit">create</button>
        <br>
    </form>
@endsection
@section('footer')
    <a class="back" href="{{ route('country.index') }}">Back</a>
@endsection

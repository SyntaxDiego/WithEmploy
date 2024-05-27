<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
@extends('Layout.app')
@section('main')
    <h1>Edit of {{ $department->name }}</h1>
    <form action="{{ route('department.update', $department->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label> Name </label>
        <input type="text" name="name" value="{{ $department->name }}" required autocomplete="off">
        @error('name')
            <div>{{ $message }}</div>
        @enderror
        <label> Country </label>
        <select name="country_id" id="country_id" required>
            @foreach ($countries as $country)
                <option value="{{ $country->id }}" {{ $department->country_id == $country->id ? 'selected' : '' }}>
                    {{ $country->name }}
                </option>
            @endforeach
        </select>
        <button class="update" type="submit">update</button>
    </form>
@endsection
@section('footer')
    <a class="back" href="{{ route('department.index') }}">Back</a>
@endsection

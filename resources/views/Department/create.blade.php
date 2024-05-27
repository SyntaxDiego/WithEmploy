<link rel="stylesheet" href="{{ asset('css/create.css') }}">
@extends('Layout.app')
@section('main')
    <h1>Create a department</h1>
    <form action="{{ route('department.store') }}" method="POST">
        @csrf
        <label> <strong>name</strong> </label>
        <input type="text" name="name" required autocomplete="off">
        @error('name')
            <div>{{ $message }}</div>
        @enderror
        <label> <strong>country</strong> </label>
        <select name="country_id">
            @foreach ($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
        <button class="create" type="submit">create</button>
        <br>
    </form>
@endsection
@section('footer')
    <a class="back" href="{{ route('department.index') }}">Back</a>
@endsection

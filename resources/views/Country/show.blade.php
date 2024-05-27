<link rel="stylesheet" href="{{ asset('css/show.css') }}">
@extends('Layout.app')
@section('main')
    <h1>Details of {{ $country->name }}</h1>
    <br>
    <p><strong>Code</strong>{{ $country->code }}</p>
    <br>
    <p><strong>Name</strong>{{ $country->name }}</p>
    <br>
    <p><strong>Continent</strong>{{ $country->continent }}</p>
@endsection
@section('footer')
    <a class="back" href="{{ route('country.index') }}">Back</a>
@endsection

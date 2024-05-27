<link rel="stylesheet" href="{{ asset('css/show.css') }}">
@extends('Layout.app')
@section('main')
    <h1>Details of {{ $department->name }}</h1>
    <br>
    <p><strong>Name</strong>{{ $department->name }}</p>
    <br>
    <p><strong>Country</strong>{{ $department->country->name }}</p>
    <br>
@endsection
@section('footer')
    <a class="back" href="{{ route('department.index') }}">Back</a>
@endsection

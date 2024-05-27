<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@extends('Layout.app')
@section('header')
    <a class="create" href="{{ route('department.create') }}">Create</a>
@endsection
@section('main')
    <h1>Departments</h1>
    @livewire('department-livewire')
    @livewireScripts()
@endsection

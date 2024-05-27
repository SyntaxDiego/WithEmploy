<link rel="stylesheet" href="{{asset('css/index.css')}}">
@extends('Layout.app')
@section('header')
    <a class="create" href="{{route('country.create')}}">Create</a>
@endsection
@section('main')
    <h1>Countries</h1>
    @livewire('country-livewire')
    @livewireScripts()
@endsection

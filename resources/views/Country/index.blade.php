@extends('Layout.app')
@section('header')
    <a href="{{route('country.create')}}">Create</a>
@endsection
@section('main')
    <h1>Countries</h1>
    @livewire('country-livewire')
    @livewireScripts()
@endsection

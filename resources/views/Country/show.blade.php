@extends('Layout.app')
@section('main')
    <h1>Details of {{ $country->name }}</h1>
    <p>{{$country->code}}</0p>
    <p>{{$country->name}}</p>
    <p>{{$country->continent}}</p>
    <a href="{{route('country.index')}}">Back</a>
@endsection

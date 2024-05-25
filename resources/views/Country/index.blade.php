@extends('Layout.app')
@section('header')
    <a href="{{route('country.create')}}">Create</a>
@endsection
@section('main')
    <h1>Countries</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($countries as $country)
                <tr>
                    <td>{{$country->name}}</td>
                    <td><a href="{{route('country.show', $country)}}">Show</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

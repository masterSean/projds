@extends('layouts.client')

@section('content')
    <h1>Organization and Functions</h1>
    <br>
    @foreach ($data as $key => $value) 
        <h2>{{ $value->name }}</h2>
        <br>
        {!! $value->objective !!}
        <hr>
    @endforeach
@endsection

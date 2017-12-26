@extends('layouts.client')

@section('content')
    <h1>DSWD Vision And Mission</h1>

    @foreach ($data as $key => $value) 
        <h2>{{ $value->name }}</h2>
        <hr>
        {!! $value->content !!}
    @endforeach
@endsection

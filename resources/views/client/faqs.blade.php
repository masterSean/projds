@extends('layouts.client')

@section('content')
    <div class="page-header">
        <h1>Frequently Asked Questions</h1>
    </div>
    @foreach ($data as $key => $value) 
        <h2>{{ $value->question }}</h2>
        <br>
        {!! $value->answer !!}
    @endforeach
@endsection

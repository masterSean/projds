@extends('layouts.client')

@section('content')
    <div class="page-header">
        <h1>Frequently Asked Questions</h1>
    </div>
    @foreach ($data as $key => $value) 
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title"><i class="fa fa-comment"></i> {!! $value->question !!}</div>
            </div>
            <div class="panel-body">
                <p>{!! $value->answer !!}</p>
            </div>
        </div>
    @endforeach
@endsection

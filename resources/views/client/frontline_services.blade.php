@extends('layouts.client')

@section('content')
    <div class="container">
        <div class="row" id="programs">
            @foreach ($data as $key => $value) 
            <div class="col-md-4 grid-view">
                <img src="{!! asset('/storage/programs/' . $value->image) !!}" id="program_icon"><br>
            <h3 style="text-align:center;">{!! $value->title !!}</h3>
                <p>{!! $value->description !!}</p>
            </div>
            @endforeach
        </div>
    </div>
@endsection

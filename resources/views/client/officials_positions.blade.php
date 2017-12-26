@extends('layouts.client')

@section('content')
    <h1>DSWD Officials and Positions</h1>

    <div class="img-container" style="width: 100%;height: auto; overflow:auto;">
        <img src="{!! asset('storage/offcials_positions/' . $data->disk_name) !!}" alt="dswd_officials" />
    </div>
@endsection

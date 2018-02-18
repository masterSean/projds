@extends('layouts.client')

@section('content')
    <h1>DSWD Officials and Positions</h1>

    <div class="img-container" style="width: 100%;height: auto; overflow:auto;">
        <center><img src="{!! asset('storage/officials_positions/' . (($data) ? $data->disk_name : null)) !!}" alt="DSWD officials" /></center>
    </div>
@endsection

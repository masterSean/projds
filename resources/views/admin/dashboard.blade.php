@extends('layouts.admin')

@section('content')
<h3>Dashboard</h3>
<hr>   
<div class="container">
    <div class="row">
        <div class="col-*-*"></div>
        <div class="col-*-*"></div>
    </div>
    <div class="row">
        <h5>Admin Activity</h5>
        <div class="col-lg-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Activity</th>
                    <th>Created At</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($logs as $key => $value)
                <tr>
                    <td>{!! $value->description !!}</td>
                    <td>{!! $value->created_at !!}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection

@section('script')
@endsection

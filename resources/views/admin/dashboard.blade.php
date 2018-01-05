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
                    <th>Date</th> 
                    <th>Name</th>
                    <th>Role</th>
                    <th>Activity</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>John</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>John</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/assets/controllers/vision_mission.js') }}"></script>
@endsection

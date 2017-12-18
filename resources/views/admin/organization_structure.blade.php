@extends('layouts.admin')

@section('content')
    <h2>Organization Structure</h2>
    <form class="form" action="/admin/organization_structure/file_upload" method="post">
        <div class="form-group">
            <label for="">Upload Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button class="btn btn-info">Upload</button>
    </form>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Uploaded Date</th>
                <th>Primary</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Recent</td>
                <td>2018-01-04</td>
                <td>No</td>
                <td><button class="btn"><i class="fa fa-"></i></button></td>
            </tr>
        </tbody>
    </table>
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/assets/controllers/vision_mission.js') }}"></script>
@endsection

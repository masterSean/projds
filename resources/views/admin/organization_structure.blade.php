@extends('layouts.admin')

@section('content')
    <div ng-controller="OrganizationStructure">
        <h2>Organization Structure</h2>
        <form class="form" ng-submit="upload()" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Upload Image</label>
                <input type="file" name="image" id="image" class="form-control">
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
                <tr ng-repeat="file in files track by $index">
                    <td>@{{ file.name }}</td>
                    <td>@{{ file.created_at }}</td>
                    <td>
                        <span ng-show="file.primary == 0" class="label label-default">No</span>
                        <span ng-hide="file.primary == 0" class="label label-info">Primary</span>
                    </td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-default"><i class="fa fa-image"></i></button>
                            <button class="btn btn-info" ng-click="setPrimary($index)"><i class="fa fa-check"></i></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/assets/controllers/organization_structure.js') }}"></script>
@endsection

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
                    <th>Primary <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="left" title="Primary sets what will be viewed by the users"></i></th>
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
                            <button class="btn btn-info" ng-click="setPrimary($index)"><i class="fa fa-check"></i></button>
                            <button class="btn btn-default" ng-click="view($index)"><i class="fa fa-image"></i></button>
                            <button class="btn btn-danger" ng-click="remove($index)"><i class="fa fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <div id="view" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h3>@{{ selected.name }}</h3><br>
                        <div class="img-contianer" style="width:100%;height: auto;overflow:auto;">
                            <img ng-src="/storage/organization_structure/@{{ selected.file_path }}" alt="organization_structure">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/assets/controllers/organization_structure.js') }}"></script>
@endsection

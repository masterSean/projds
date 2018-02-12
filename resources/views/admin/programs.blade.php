@extends('layouts.admin')

@section('content')
<div ng-controller="ProgramsController">
    <button class="btn btn-info" data-toggle="modal" data-target="#addprogram">Add Programs</button><br><br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="program in programs">
                <td>@{{ program.title }}</td>
                <td>@{{ program.description }}</td>
                <td>@{{ program.created_at }}</td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-primary" ng-click="edit($index)"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger" ng-click="remove($index)"><i class="fa fa-remove"></i></button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    
    <div id="addprogram" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"></div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form ng-submit="save()">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input class="form-control" type="text" ng-model="program.title">
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea id="" class="form-control" name="" cols="30" rows="5" ng-model="program.description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="image" />
                                </div>
                                <button class="btn btn-success">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        let programs = '{!! $programs !!}';
    </script>
    <script type="text/javascript" src="{{ asset('js/assets/controllers/programs.js') }}"></script>
@endsection

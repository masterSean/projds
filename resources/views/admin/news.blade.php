@extends('layouts.admin')

@section('content')
<div ng-controller="NewsController">
    <button class="btn btn-info" data-toggle="modal" data-target="#addnews" ng-click="edit_mode=false">Add News</button><br><br>
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
            <tr ng-repeat="data in news">
                <td>@{{ data.title }}</td>
                <td>@{{ data.description }}</td>
                <td>@{{ data.created_at }}</td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-primary" ng-click="edit($index, data.id)"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger" ng-click="remove($index, data.id)"><i class="fa fa-remove"></i></button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    
    <div id="addnews" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"></div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form ng-submit="save()">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input class="form-control" type="text" ng-model="data.title">
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea id="" class="form-control" name="" cols="30" rows="5" ng-model="data.description"></textarea>
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
    
    <div id="editnews" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"></div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form ng-submit="update()">
                                <input type="hidden" ng-model="edit_data.id">
                                <input type="hidden" ng-model="edit_data.index">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input class="form-control" type="text" ng-model="edit_data.title">
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea id="" class="form-control" name="" cols="30" rows="5" ng-model="edit_data.description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="edit_image" />
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
        let data = '{!! $news !!}';
    </script>
    <script type="text/javascript" src="{{ asset('js/assets/controllers/news.js') }}"></script>
@endsection

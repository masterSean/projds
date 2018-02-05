@extends('layouts.admin')

@section('content')
<div ng-controller="SettingsController">
    <div class="page-header">
        <h2>Settings</h2>
    </div>
    <div class="col-md-8">
        <form class="form-horizontal" ng-submit="save()">
    
            <div class="form-group">
                <a href="#" ng-click="edit.username = !edit.username"><i class="fa fa-pencil pull-right"></i></a>
                <label for="">Username</label>
                <input class="form-control" type="text" ng-model="user.email" ng-disabled="edit.username" />
            </div>
    
            <div class="form-group">
                <a href="#" ng-click="edit.password = !edit.password"><i class="fa fa-pencil pull-right"></i></a>
                <label for="">Password</label>
                <input class="form-control" type="password" disabled="true" ng-disabled="edit.password" ng-model="user.password" />
            </div>
    
            <div class="form-group">
                <input class="btn btn-success" type="submit" value="Save">
            </div>

        </form>
    </div>
</div>
@endsection

@section('script')
    <script type="text/javascript">
        const user = '{!! auth()->user() !!}';
    </script>
    <script type="text/javascript" src="{{ asset('js/assets/controllers/settings.js') }}"></script>
@endsection

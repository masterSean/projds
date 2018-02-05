@extends('layouts.adminlogin')

@section('content')
    <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">Reset Password</div>
            <div class="panel-body">
                <p>Click the <b>Reset Password</b> button to reset your password</p>
                <p>This will generate a random string which will be your new password.</p>
                <p>It is adviced to reset your password to something you can easily remember in the settings tab in the admin panel.</p>
                <a href="/reset_password" class="btn btn-primary">Reset Password</a>
            </div>
        </div>
    </div>
@endsection

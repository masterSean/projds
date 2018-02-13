@extends('layouts.adminlogin')

@section('content')
    <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">Reset Password</div>
            <div class="panel-body">
                <p>Your new password</p>
                <small>Please reset your password to something that can be easily remembered after a successful login.</small><br>
                <small>Copy and paste this new password in password field located at the <a href="/login">login</a> form</small>
                <br>
                <h3>{{ $new_password }}</h3>
                <a href="/login">Login</a>
            </div>
        </div>
    </div>
@endsection

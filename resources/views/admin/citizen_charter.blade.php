@extends('layouts.admin')

@section('content')
<div>
    <ul id="citizencharter" class="nav nav-tabs" role="tablist">
        <li class="active" role="presentation"><a href="#vision_mission" aria-controls="vision_mission" data-toggle="tab">Vision Mission</a></li>
        <li role="presentation"><a href="#orgfunc" aria-controls="organizations_functions" data-toggle="tab">Organizations & Functions</a></li>
        <li role="presentation"><a href="#service" aria-controls="organizations_functions" data-toggle="tab">Service Pledge</a></li>
        <li role="presentation"><a href="#feedback" aria-controls="organizations_functions" data-toggle="tab">Receiving Feedback</a></li>
        <li role="presentation"><a href="#frontline" aria-controls="organizations_functions" data-toggle="tab">Frontline Service</a></li>
        <li role="presentation"><a href="#officials" aria-controls="organizations_functions" data-toggle="tab">DSWD Officials and Key Positions</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="vision_mission" role="tabpanel">@include('admin.vision_mission')</div>
        <div class="tab-pane" role="tabpanel" id="orgfunc">@include('admin.organizations_functions')</div>
        <div class="tab-pane" role="tabpanel" id="service">@include('admin.service_pledge')</div>
        <div class="tab-pane" role="tabpanel" id="feedback">@include('admin.receiving_feedback')</div>
        <div class="tab-pane" role="tabpanel" id="frontline">@include('admin.frontline_service')</div>
        <div class="tab-pane" role="tabpanel" id="officials">@include('admin.dswd_officials')</div>
    </div>
</div>
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/assets/controllers/vision_mission.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/assets/controllers/organization_functions.js') }}"></script>
@endsection

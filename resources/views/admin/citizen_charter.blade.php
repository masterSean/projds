@extends('layouts.admin')

@section('content')
<div>
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a href="#vision_mission" aria-controls="vision_mission" data-toggle="tab">Vision Mission</a></li>
        <li class="active" role="presentation"><a href="#organizaions_functions" aria-controls="organizations_functions" data-toggle="tab">Organizations & Functions</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" id="vision_mission" role="tabpanel">@include('admin.vision_mission')</div>
        <div class="tab-pane active" id="organizations_functions" role="tabpanel">@include('admin.organizations_functions')</div>
    </div>
</div>
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/assets/controllers/vision_mission.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/assets/controllers/organization_functions.js') }}"></script>
@endsection

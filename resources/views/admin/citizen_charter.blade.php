@extends('layouts.admin')

@section('content')
    <div>
        <ul class="nav nav-tabs" role="tablist">
            <li class="active" role="presentation"><a href="#vision_mission" data-toggle="tab">Vision Mission</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="vision_mission" role="tabpanel">@include('admin.vision_mission')</div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/assets/controllers/vision_mission.js') }}"></script>
@endsection

@extends('layouts.client')

@section('content')
    <h1>Organization Structure</h1>
    <br>
    <div class="img-contianer" style="width:auto;height:auto;overflow:auto;">
        <img src="{!! asset('/storage/organization_structure/' . $data->file_path) !!}" alt="organization_structure">
    </div>
@endsection

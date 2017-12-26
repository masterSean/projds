@extends('layouts.client')

@section('content')
    <h1>Dashboard</h1>
    <br>
    <!-- carousel -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="http://via.placeholder.com/1200x500" alt="imgs">
                <div class="carousel-caption">...</div>
            </div>
            <div class="item">
                <img src="http://via.placeholder.com/1200x500" alt="imgs">
                <div class="carousel-caption">...</div>
            </div>
            <div class="item">
                <img src="http://via.placeholder.com/1200x500" alt="imgs">
                <div class="carousel-caption">...</div>
            </div>
        </div>
        <a class="left carousel-control" href="">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- end carousel -->
@endsection

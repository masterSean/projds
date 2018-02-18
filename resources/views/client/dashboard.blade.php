@extends('layouts.client')

@section('content')
    <!-- carousel -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php $count = 0; ?>
            @foreach ($data as $news)
                @if ($count == 0)
                <div class="item active">
                @else
                <div class="item">
                @endif
                    <center><img src="{!! asset('storage/news/' . $news->image) !!}" alt="imgs"></center>
                    <div class="carousel-caption carousel-text">{!! $news->description !!}</div>
                </div>
                <?php $count++; ?>
            @endforeach
        </div>
        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- end carousel -->
@endsection

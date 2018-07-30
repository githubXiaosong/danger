@extends('layouts.main')


@section('content')

    <div class="row">

        @foreach( $videoList as $video )
            <div class="col-sm-6 col-xs-6  col-md-4">

                <a href="{{ url('/page/detail/'.$video->id) }}">
                    <div class="thumbnail">
                        <img src="{{ $video->cover_uri }}"
                             alt="...">
                        <div class="caption">
                            <h3>{{ $video->title }}</h3>

                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>


@endsection
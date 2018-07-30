@extends('layouts.main')


@section('content')

    <h3 class="mb-20">{{ $video->title }}
        <small>所属类型:{{ $video->category->title }}</small>
    </h3>

    <div class="row">

        <div class="thumbnail col-md-6 ">
            <img src="{{ $video->img1 }}"
                 alt="...">
        </div>
        <div class="thumbnail col-md-6">
            <img src="{{ $video->img2 }}"
                 alt="...">
        </div>
        <div class="thumbnail col-md-6">
            <img src="{{ $video->img3 }}"
                 alt="...">
        </div>
        <div class="thumbnail col-md-6">
            <img src="{{ $video->img4 }}"
                 alt="...">
        </div>

    </div>
    <p>链接地址(请使用迅雷边下边播功能观看):</p>
    <a href="{{ url('page/tutorial') }}"><button class="btn btn-primary  mb-20"> 不会观看? 点我看教程(非常简单)</button></a>

    <p id="video-url" class="mark" style="word-break:break-all">{{ $video->video_uri }}</p>

    <script>

    </script>

@endsection
@extends('layouts.main')


@section('content')
    <div class="main">
        <!-- 位置开始 -->
        <div class="k_lujing">
            <ul>
                <li class="k_lujing-1">当前位置：</li>

                <li class="k_lujing-3"><a href="{{ url('page/videoList/'.$category->id )}}">{{ $category->title }}</a></li>
            </ul>
        </div>
        <div class="ad-960">
            <!-- 广告位：L1(960x90) -->
            <script src="/copy_lib/960-1.js.下载"></script><div style="background:#ccc;width: 960px;height: 90px;"></div>

        </div>

        <!-- 列表开始 -->
        <div class="k_list">
            <div class="k_list-1">
                <div class="k_list-1a">



                    @foreach( $videoList as $video)
                        <div class="k_list-lb">
                            <ul>
                                <li class="k_list-lb-1">
                                    <div id="k_upnew-1d-img">
                                        <a class="lz_img" href="{{ url('page/detail/'.$video->id)}}" target="_blank"><img src="{{ '/storage/'.$video->cover_uri }}" border="0"><span class="lz_bg"></span><span class="lz_time">HD高清</span></a>
                                    </div>
                                </li>
                                <li class="k_list-lb-2">
                                    <div id="k_list-lb-2-a"><a href="{{ url('page/detail/'.$video->id)}}" target="_blank">{{ $video->title }}</a></div>
                                    <div id="k_list-lb-2-d"></div>
                                    <div id="k_list-lb-2-d"></div>

                                    <div id="k_list-lb-2-b"><div id="k_list-lb-2-bb">播放次数：{{ $video->pop_num }}&nbsp;</div></div>
                                    <div id="k_list-lb-2-e">简介：{{ $video->desc }}</div>
                                    <div id="k_list-lb-2-f">更新：{{ $video->created_at }}</div>
                                </li>
                            </ul>
                        </div>

                        @endforeach

                    {{ $videoList->links() }}
                </div>


                <div class="k_list-1b">

                    <div class="ad-250">
                        <!-- 广告位：L3(250x250) -->
                        <script src="/copy_lib/250x100.js.下载"></script><div style="background:#ccc;width: 250px;height: 100px;"></div>

                    </div>
                    <div class="k_list-1b-a">
                        <div class="k_list-1b-a1">人气排行榜</div>
                    </div>
                    <div class="k_list-1b-b">

                      @foreach($popList as $video)

                        <div class="k_movie-1b-b1">
                            <ul>

                                <li class="k_movie-1b-b1-title"><a href="http://www.xiaoheju.com/fiml/44395.html" target="_blank">{{ $video->title }}</a></li>
                                <li class="k_movie-1b-b1-hits">{{ $video->pop_num }}</li>
                            </ul>
                        </div>
                        @endforeach

                    </div>
                    <div class="clear"></div>
                    <div class="ad-250">
                        <!-- 广告位：L1(250x250) -->
                        <script src="/copy_lib/250-1.js.下载"></script><div style="background:#ccc;width: 250px;height: 250px;"></div>

                    </div>

                    <div class="ad-250">
                        <!-- 广告位：L3(250x250) -->
                        <script src="/copy_lib/250x100.js.下载"></script><div style="background:#ccc;width: 250px;height: 100px;"></div>

                    </div>


                </div>
            </div>
        </div>
    </div>


@endsection
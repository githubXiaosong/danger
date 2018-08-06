@extends('layouts.main')


@section('content')




    <div class="main">
        <div class="k_newgg" style="text-align: left;">小河居电影网提供最新首发电影大片、全集电视剧、综艺及动漫等影片在线观看，请用记住我们的网址 www.xiaoheju.com
            ，记得收藏网址喔！
        </div>
        <div cl-显示 -->

            @foreach($categories as $category)

                <!-- movie -->
                <div class="k_movie">
                    <div class="k_movie-1">
                        <div class="k_movie-1a">
                            <div class="k_movie-1a-a">

                                <li class="k_movie-1a-a1"><h3 style="width: 230px">{{ $category->title }}</h3></li>
                                <li class="k_movie-1a-a2"><em>·TOP rihan</em></li>
                                <li class="k_movie-1a-a3"><a href="{{ url('page/videoList/'.$category->id) }}">{{ $category->title }}频道</a></li>
                                </ul>
                            </div>
                            <div class="k_movie-1a-b">
                                <ul>
                                    @foreach($category->newList as $video)
                                        <li class="k_upnew-1d">
                                            <div id="k_upnew-1d-img">
                                                <a class="lz_img" href="{{ url('page/detail/'.$video->id) }}"
                                                   target="_blank"><img
                                                            alt="{{ $video->title }}"
                                                            src="{{ '/storage/'.$video->cover_uri }}"
                                                            border="0"><span class="lz_bg"></span><span
                                                            class="lz_time">HD清晰版</span></a>
                                            </div>
                                            <div id="k_upnew-1d-title">
                                                <a class="name" href="http://www.xiaoheju.com/fiml/44380.html"
                                                   target="_blank">{{ $video->title }}</a>
                                            </div>
                                            <div id="k_upnew-1d-zy">{{ $video->desc }}
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                        <div class="k_movie-1b">
                            <div class="k_movie-1b-a">
                                <div class="k_movie-1b-a1">{{ $category->title }}人气排行榜</div>
                            </div>
                            <div class="k_movie-1b-b" style="height:560px">
                                @foreach($category->popList as $video)

                                <div class="k_movie-1b-b1">
                                    <ul>
                                        <li class="k_movie-1b-b1-1">1</li>
                                        <li class="k_movie-1b-b1-title"><a
                                                    href="{{ url('page/detail/'.$video->id) }}"
                                                    target="_blank">{{ $video->title }}</a></li>
                                        <li class="k_movie-1b-b1-hits">{{ $video->pop_num }}</li>
                                    </ul>
                                </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>

            @endforeach




            <div class="ad-960">
                <!-- 广告位：A3(960x90) -->
            </div>


            <div class="ad-960">
                <!-- 广告位：A4(960x90) -->
            </div>

            <!-- k_link -->
            <div class="k_link">
                <div class="k_link-1">
                    <div class="k_link-1a">
                        <ul>
                            <li class="k_link-1a-a"><h3>友情链接</h3></li>
                            <li class="k_link-1a-b"><em>· LINKS</em></li>
                            <li class="k_link-1a-c">（百度权重&gt;4，定期清理被降权重友情）</li>
                        </ul>
                    </div>
                    <div class="k_link-1b">
                        <ul>

                            <li><a href="http://www.xiaoheju.com/" target="_blank">小河居</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>





@endsection
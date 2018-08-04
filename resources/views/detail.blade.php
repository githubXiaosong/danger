@extends('layouts.main')


@section('content')


<div class="main">
    <!-- 位置开始 -->
    <div class="k_lujing">
        <ul>
            <li class="k_lujing-1">当前位置：</li>
   
            <li class="k_lujing-3">{{ $video->title }}</li>
        </ul>
    </div>
    <div class="ad-960">
        <!-- 广告位：L1(960x90) -->
    </div>
    <!-- 简介开始 -->
    <div class="k_jianjie">
        <div class="k_jianjie-1">
            <ul>
                <li class="k_jianjie-2">
                    <div id="k_jianjie-2b"><a  title="{{ $video->title }}"><img src="{{ '/storage/'.$video->cover_uri }}" alt="{{ $video->title }}" border="0"></a></div>
                    <div id="k_jianjie-2c">您对此片有什么表态？</div>
                    <div id="k_jianjie-2d">
                        <div class="xinglist">
							<span>
								<img src="/copy_lib/star0.gif" style="cursor:pointer" alt="较差" border="0">
								<img src="/copy_lib/star0.gif" style="cursor:pointer" alt="一般" border="0">
								<img src="/copy_lib/star0.gif" style="cursor:pointer" alt="还行" border="0">
								<img src="/copy_lib/star0.gif" style="cursor:pointer" alt="推荐" border="0">
								<img src="/copy_lib/star0.gif" style="cursor:pointer" alt="力荐" border="0">
								<img src="/copy_lib/star0.gif" style="cursor:pointer" alt="精品" border="0">
							<span><strong style="font-size:14px;color:red" id="MARK_B2">0.0</strong></span>
						</span></div>
                    </div>
                    <div id="k_jianjie-2e">
                        <!-- 广告位：C(160x600) -->
                    </div>
                </li>
                <li class="k_jianjie-3">
                    <div id="k_jianjie-3a">
                        <div class="k_jianjie-3a-1">
                            <ul>
                                <li class="k_jianjie-3a-1-name">{{ $video->title }}</li>
                                <li class="k_jianjie-3a-1-gx">(2018)</li>
                            </ul>
                        </div>
                        <div class="k_jianjie-3a-2">
                            <ul>
                                <li class="k_jianjie-3a-2a">状态：</li>
                                <li class="k_jianjie-3a-2c">HD清晰版</li>
                            </ul>
                        </div>

                        <div class="k_jianjie-3a-2">
                            <ul>
                                <li class="k_jianjie-3a-2a">类型：</li>
                                <li class="k_jianjie-3a-2b"><a href="http://www.xiaoheju.com/lists/5-1.html">{{ $video->category->title }}</a></li>
                            </ul>
                        </div>


                        <div class="k_jianjie-3a-2">
                            <ul>
                                <li class="k_jianjie-3a-2a">日期：</li>
                                <li class="k_jianjie-3a-2b">{{ $video->created_at }}</li>
                            </ul>
                        </div>

                        <div class="k_jianjie-3a-2">

                        </div>

                        <div class="k_jianjie-3a-2">

                        </div>

                        <div class="k_jianjie-3a-2">

                        </div>

                        <div class="k_jianjie-3a-2">

                        </div>

                        <div class="k_jianjie-3a-2">

                        </div>

                        <div class="ad-728">
                            <!-- 广告位：C(728x90) -->
                        </div>
                        <div class="k_jianjie-3a-3c" style="text-align: left;"><span>小贴士：把网站分享到你朋友圈,微博,QQ空间吧！</span></div>

                        <div class="k_jianjie-3a-4">
                            <ul>
                                <li class="k_jianjie-3a-4-logo-vodyun">酷播：<span>&gt;&gt;</span></li>
                                <li class="k_jianjie-3a-4-down" style="float: right;"></li>
                            </ul>
                        </div>
                        <div class="k_jianjie-3a-5" id="play_1">
                            <ul>

                                <li><a title="HD清晰版" href="{{ url('/page/play/'.$video->id) }}" target="_blank">HD清晰版</a></li>

                            </ul>
                        </div>


                        <div class="k_juqingjianjie" style="width: 708px;">
                            <p>剧情简介：</p>
                            <div id="zhankai">{{ $video->desc  }}<span style="cursor: pointer;color: #0b9b9b;" onclick="$(&#39;#zhankai&#39;).hide(); $(&#39;#shouqi&#39;).show();"></span></div>

                        </div>
                        <div class="ad-728">
                            <!-- 广告位：C(728x90) -->
                        </div>
                        <div class="k_jianjie-3a-8">
                            <div class="k_jianjie-3a-8a">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection
@extends('layouts.main')


@section('header')
    <!-- mini_head -->
    <div class="k_headp">
        <div class="k_headp-1">
            <ul>
                <li class="headp-1-logo"><a href="http://www.xiaoheju.com/" title="小河居电影网" target="_blank"></a></li>
                <li class="headp-1-l"></li>
                <li class="head-2a-list"><a target="_blank" href="http://www.xiaoheju.com/">首页</a></li>

                <li class="head-2a-list"><a href="http://www.xiaoheju.com/lists/1-1.html">电影</a></li>

                <li class="head-2a-list"><a href="http://www.xiaoheju.com/lists/2-1.html">电视剧</a></li>

                <li class="head-2a-list"><a href="http://www.xiaoheju.com/lists/3-1.html">综艺</a></li>

                <li class="head-2a-list"><a href="http://www.xiaoheju.com/lists/4-1.html">动漫</a></li>

                <li class="head-2a-list"><a href="http://www.xiaoheju.com/lists/5-1.html">最近更新</a></li>
                <li class="headp-1-inp" style="float: right;">
                    <div id="headp-1-inp1">
                        <form name="searchform" action="http://www.xiaoheju.com/index.php?m=vod-search" method="post">
                            <ul>
                                <li class="headp-1-inp2"><input name="wd" type="text" value="" class="headp-1-inp2-a"></li>
                                <li class="headp-1-inp3"><input type="submit" value="" class="headp-1-inp3-a"></li>
                            </ul>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('content')

    <script type="text/javascript" src="/lib/ckplayer6.8/ckplayer/ckplayer.js" charset="utf-8"></script>


    <!-- k_play -->
    <div class="k_play">
        <div class="k_play-1">
            <div class="ad-960">
                <!-- 广告位：P1(960x90) -->
            </div>
            <div class="k_play-3">
                <ul>
                    <li class="k_play-3a">
                        <div id="k_play-3a-1">
                            <ul>
                                <li class="k_play-3a-1a"><a href="http://www.xiaoheju.com/" target="_blank">首页</a></li>
                                <li class="k_play-3a-1c">&gt;</li>
                                <li class="k_play-3a-1b"><a href="http://www.xiaoheju.com/lists/5-1.html">动作片</a></li>
                                <li class="k_play-3a-1c">&gt;</li>
                                <li class="k_play-3a-1b"><a href="http://www.xiaoheju.com/fiml/44380.html"
                                                            target="_blank">碟中谍6：全面瓦解</a></li>
                                <li class="k_play-3a-1c">&gt;</li>
                                <li class="k_play-3a-1d">动作片</li>
                            </ul>
                        </div>

                    </li>
                    <li class="k_play-3b">
                        <div id="k_play-3b-1">
                            <!-- 广告位：(300x250) -->
                        </div>
                        <div id="k_play-3b-2">
                            <!-- 广告位：(250x250) -->
                        </div>
                    </li>
                </ul>
            </div>


        </div>
    </div>

    <script>
        var flashvars = {
            f: '/asstes/video/1_0.mp4',
            c: 0,
            e: 5,//暂停播放并且调用暂停广告
            p: 1,
            l: 'http://www.ckplayer.com/yytf/swf/front001.swf|http://www.ckplayer.com/yytf/swf/front002.swf',//前置广告地址
            r: 'http://www.baidu.com|http://www.baidu.com',//前置广告的链接地址
            t: '5,3',//前置广告的播放时间
            d: 'http://www.ckplayer.com/yytf/swf/pause001.swf|http://www.ckplayer.com/yytf/swf/pause002.swf',//暂停广告地址
            u: 'http://www.baidu.com|http://www.baidu.com',//暂停广告链接地址
        };
        var video = ['/asstes/video/1_0.mp4->video/mp4'];
        CKobject.embed('/lib/ckplayer6.8/ckplayer/ckplayer.swf', 'a1', 'ckplayer_a1', '600', '400', false, flashvars, video);
    </script>

@endsection
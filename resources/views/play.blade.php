@extends('layouts.main')


@section('header')
    <!-- mini_head -->
    <div class="k_headp">
        <div class="k_headp-1">
            <ul>
                <li class="headp-1-logo"><a href="http://www.xiaoheju.com/" title="小河居电影网" target="_blank"></a></li>
                <li class="headp-1-l"></li>
                <li class="head-2a-list"><a target="_blank" href="{{ url('page/index') }}/">首页</a></li>

                @foreach( json_decode(file_get_contents("http://127.0.0.1/api/getCategoryList"),true) as $item)
                    <li class="head-2a-list ">
                        <a href="{{ url('page/videoList/'.$item['id']) }}">{{ $item['title'] }}</a>
                    </li>
                @endforeach




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
            <div id="a1"></div>


        </div>
    </div>

    <script>
        var flashvars = {
            f: 'https://d2.xia12345.com/down/93/2018/07/QuYXFmEr.mp4',
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
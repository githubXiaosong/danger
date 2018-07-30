@extends('layouts.main')


@section('content')

    <script type="text/javascript" src="/lib/ckplayer6.8/ckplayer/ckplayer.js" charset="utf-8"></script>

    <div class="row ">

        <center >
            <div id="a1"></div>
        </center>

    </div>

    <script>
        var flashvars={
            f:'/asstes/video/1_0.mp4',
            c:0,
            e:5,//暂停播放并且调用暂停广告
            p:1,
            l:'http://www.ckplayer.com/yytf/swf/front001.swf|http://www.ckplayer.com/yytf/swf/front002.swf',//前置广告地址
            r:'http://www.baidu.com|http://www.baidu.com',//前置广告的链接地址
            t:'5,3',//前置广告的播放时间
            d:'http://www.ckplayer.com/yytf/swf/pause001.swf|http://www.ckplayer.com/yytf/swf/pause002.swf',//暂停广告地址
            u:'http://www.baidu.com|http://www.baidu.com',//暂停广告链接地址
        };
        var video=['/asstes/video/1_0.mp4->video/mp4'];
        CKobject.embed('/lib/ckplayer6.8/ckplayer/ckplayer.swf','a1','ckplayer_a1','600','400',false,flashvars,video);
    </script>

@endsection
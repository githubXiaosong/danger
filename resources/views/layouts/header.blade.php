<div class="k_head">
    <div class="k_head-1">
        <div class="k_head-1a"><a href="http://www.xiaoheju.com/" target="_blank" title="小河居电影网"></a></div>
        <div class="k_head-1b">
            <div class="k_head-1b-hot">
                热门搜索：
                @foreach( json_decode(file_get_contents("http://127.0.0.1/api/getTopList"),true) as $item)

                <a href="{{ url('page/detail/'.$item['id']) }}"  target="_blank">{{ $item['title'] }}</a>

                @endforeach

            </div>

        </div>
    </div>

    <div class="k_head-2">
        <div class="k_head-2a">
            <ul>
                <li class=" {{ \Illuminate\Support\Facades\Request::is('page/index') ? 'head-2a-list-b ' : 'head-2a-list' }}">
                    <a href="{{ url('page/index') }}">首页</a></li>


                @foreach( json_decode(file_get_contents("http://127.0.0.1/api/getCategoryList"),true) as $item)
                    <li class=" {{ \Illuminate\Support\Facades\Request::is( 'page/videoList/'.$item['id'] ) ? 'head-2a-list-b' : 'head-2a-list' }}">
                        <a href="{{ url('page/videoList/'.$item['id']) }}">{{ $item['title'] }}</a>
                    </li>
                @endforeach


            </ul>
        </div>
    </div>
</div>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="font-size: 20px;" href="{{ url('page/index') }}">Brand</a>
            <span class="navbar-brand" style="font-size: 12px">优质 稳定 清晰的资源服务</span>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class=" {{ \Illuminate\Support\Facades\Request::is('page/index') ? 'active' : ''  }} "><a href="{{ url('page/index') }}">本周推荐 </a></li>
                <li class=" {{ \Illuminate\Support\Facades\Request::is('page/videoList/1') ? 'active' : ''  }} "><a href="{{ url('page/videoList/1') }}">类型1</a></li>
                <li class=" {{ \Illuminate\Support\Facades\Request::is('page/videoList/2') ? 'active' : ''  }} "><a href="{{ url('page/videoList/2') }}">类型2</a></li>
                <li class=" {{ \Illuminate\Support\Facades\Request::is('page/videoList/3') ? 'active' : ''  }} "><a href="{{ url('page/videoList/3') }}">类型3</a></li>
                <li class=" {{ \Illuminate\Support\Facades\Request::is('page/videoList/4') ? 'active' : ''  }} "><a href="{{ url('page/videoList/4') }}">类型4</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
</nav>
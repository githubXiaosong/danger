<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.0</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi"/>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/lib/admin/css/font.css">
    <link rel="stylesheet" href="/lib/admin/css/xadmin.css">
    <link rel="stylesheet" href="/css/my.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="/lib/admin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/lib/admin/js/xadmin.js"></script>
    <script type="text/javascript" src="/js/my.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="x-body">


    <script>
        @if (session('suc_msg'))
        Toast('{{ session('suc_msg') }}', 2000);
        @endif
    </script>

    <form class="layui-form" action="{{ url('admin/api/videoAdd') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="layui-form-item">
            <label for="L_title" class="layui-form-label">
                <span class="x-red">*</span>名称
            </label>

            <div class="layui-input-inline  {{ $errors->has('title') ? 'error-input' : '' }}">
                <input type="text" id="L_title" name="title" required=""
                       autocomplete="off" class="layui-input" value="{{ old('title') }}" autofocus>
            </div>
            @if ($errors->has('title'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>

        <div class="layui-form-item">
            <label for="L_category_id" class="layui-form-label">
                <span class="x-red">*</span>分类
            </label>

            <div class="layui-input-inline">
                <select name="category_id" id="L_sex" lay-verify="category_id" class="layui-input">
                    @foreach( $categories as $category )
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="layui-form-item">
            <label for="L_phone" class="layui-form-label">
                <span class="x-red">*</span>视频地址
            </label>

            <div class="layui-input-inline  {{ $errors->has('video_uri') ? 'error-input' : '' }}">
                <input type="text" name="video_uri" required="" id="video_uri"
                       autocomplete="off" class="layui-input" value="{{ old('video_uri') }}" autofocus>
            </div>
            @if ($errors->has('video_uri'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('video_uri') }}</strong>
                </span>
            @endif
        </div>

        <div class="layui-form-item">
            <label for="L_cover" class="layui-form-label">
                <span class="x-red">*</span>封面图片
            </label>

            <div class="layui-input-inline  {{ $errors->has('cover_uri') ? 'error-input' : '' }}">
                <input type="file" name="cover_uri" required="" id="cover_uri"
                       autocomplete="off" class="layui-input" value="{{ old('cover_uri') }}" autofocus>
            </div>
            @if ($errors->has('cover_uri'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('cover_uri') }}</strong>
                </span>
            @endif
        </div>

        <div class="layui-form-item">
            <label for="L_img1" class="layui-form-label">
                <span class="x-red">*</span>图片1
            </label>

            <div class="layui-input-inline  {{ $errors->has('img1') ? 'error-input' : '' }}">
                <input type="file" name="img1" required="" id="img1"
                       autocomplete="off" class="layui-input" value="{{ old('img1') }}" autofocus>
            </div>
            @if ($errors->has('img1'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('img1') }}</strong>
                </span>
            @endif
        </div>

        <div class="layui-form-item">
            <label for="L_img2" class="layui-form-label">
                <span class="x-red">*</span>图片2
            </label>

            <div class="layui-input-inline  {{ $errors->has('img2') ? 'error-input' : '' }}">
                <input type="file" name="img2" required="" id="img2"
                       autocomplete="off" class="layui-input" value="{{ old('img2') }}" autofocus>
            </div>
            @if ($errors->has('img2'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('img2') }}</strong>
                </span>
            @endif
        </div>

        <div class="layui-form-item">
            <label for="L_img3" class="layui-form-label">
                <span class="x-red">*</span>图片3
            </label>

            <div class="layui-input-inline  {{ $errors->has('img3') ? 'error-input' : '' }}">
                <input type="file" name="img3" required="" id="img3"
                       autocomplete="off" class="layui-input" value="{{ old('img3') }}" autofocus>
            </div>
            @if ($errors->has('img3'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('img3') }}</strong>
                </span>
            @endif
        </div>

        <div class="layui-form-item">
            <label for="L_img4" class="layui-form-label">
                <span class="x-red">*</span>图片4
            </label>

            <div class="layui-input-inline  {{ $errors->has('img4') ? 'error-input' : '' }}">
                <input type="file" name="img4" required="" id="img4"
                       autocomplete="off" class="layui-input" value="{{ old('img4') }}" autofocus>
            </div>
            @if ($errors->has('img4'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('img4') }}</strong>
                </span>
            @endif
        </div>


        <div class="layui-form-item">
            <label for="L_repass" class="layui-form-label">
            </label>
            <button type="submit" class="layui-btn" lay-filter="add" lay-submit="">
                增加
            </button>
            <a style="padding-left: 20px" href="{{ url('admin/roomList') }}">返回</a>
        </div>


    </form>
</div>
<script>


</script>

</body>

</html>
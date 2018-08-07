<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    <link href="/copy_lib/style.css" rel="stylesheet" type="text/css">

    <script src="/copy_lib/jquery.min.js.下载"></script>


    <link href="/css/my.css" rel="stylesheet" type="text/css">


    <script type="text/javascript">
        // 跳转手机页面
        if (!!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
            location.href = '{{ url('/m/page/index') }}';
        }
    </script>

</head>
<body>

@section('header')

@include('layouts.header')

@show

<div class=" mt-50" style="min-height: 800px" >
    @yield('content')
</div>


@section('footer')

@include('layouts.footer')

@show

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>江苏宜宝设备制造有限公司-后台管理</title>

    @include('commons/css')

    @yield('style')

</head>

<body>

<div id="wrapper">

    @include('commons/nav')

    <div id="page-wrapper">

        <div class="row">@yield('content')</div>

    </div>

</div>

@include('commons/javascript')

@yield('javascript')

</body>

</html>
